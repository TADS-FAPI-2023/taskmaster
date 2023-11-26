<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Task;
use App\Services\StorageService;
use App\Http\Requests\FileRequest;
use App\Http\Requests\FileUpdateRequest;

class FileController extends Controller
{
    protected readonly File $file;
    protected readonly StorageService $storage_service;
    protected readonly string $file_path;

    public function __construct(File $file, StorageService $storage_service)
    {
        $this->file = $file;
        $this->storage_service = $storage_service;
        $this->file_path = 'files/';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $files = $this->file->all();
        if ($files->count() > 0) {
            foreach ($files as $item) {
                $item->file_url = $this->storage_service->getAwsFile($this->file_path, $item->filename);
                $item->extension = '.' . substr(strrchr($item->filename, '.'), 1);
            }
        }
        return view('header') . view('files.index', ['files' => $files]);
    }


    public function showTaskEvaluate($task_id)
    {
        $file = File::where('tasks_id', $task_id)->get();
        $task = Task::find($task_id);
      
        if (!$file->isEmpty()) {
            if (isset($file[0])) {
                $file = $file[0];
            }
            $file->file_url = $this->storage_service->getAwsFile($this->file_path, $file->filename);
            return view('header') . view('files.evaluate', ['task' => $task, 'file' => $file]);
        }
        return view('header') . view('welcome')->with('error', 'Não existe arquivo para avaliar');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create($id)
    {
        $task = Task::find($id);
        $task->status = 'evaluate';
        $task->save();
        $file = File::where('tasks_id', $task->id)->get();

        if (!$file->isEmpty()) {
            if (isset($file[0])) {
                $file = $file[0];
            }
            $file->file_url = $this->storage_service->getAwsFile($this->file_path, $file->filename);
            return view('header') . view('files.edit', ['task' => $task, 'file' => $file]);
        }
        return view('header') . view('files.create', ['task' => $task]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FileRequest $request, $task_id)
    {
        $filename = $request->filename->getClientOriginalName();
        $info = pathinfo($filename);
        $newFilename = $info['filename'] . $task_id . '.' . $info['extension'];

        $request->filename->storeAs($this->file_path, $newFilename, 's3');

        $this->file->create([
            'filename' => $newFilename,
            'description' => $request->description,
            'tasks_id' => $task_id,
        ]);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(File $file)
    {
        $file->file_url = $this->storage_service->getAwsFile($this->file_path, $file->filename);
        return view('header') . view('files.edit', ['file' => $file]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FileUpdateRequest $request, File $file)
    {
        if($file->status == 'completed'){
            return back()->with('error', 'Não é possível editar um arquivo avaliado');
  
        }
        
        $filename = $request->filename->getClientOriginalName();
        $info = pathinfo($filename);
        $newFilename = $info['filename'] . $file->tasks_id . '.' . $info['extension'];

        $data = $request->all();
        if ($newFilename) {
            $this->storage_service->deleteAwsFile($this->file_path, $file->filename);
            $request->filename->storeAs($this->file_path, $newFilename, 's3');
            $data['filename'] = $newFilename;
        }
        $file->update($data);
        $task = Task::find($file->tasks_id);
        $task->status = 'evaluate';
        $task->save();
        $file = File::find($file->id);
        $file->file_url = $this->storage_service->getAwsFile($this->file_path, $file->filename);
        return view('header') . view('files.edit', ['task' => $task, 'file' => $file]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(File $file)
    {
        $this->storage_service->deleteAwsFile($this->file_path, $file->filename);
        $file->delete();
        return redirect()->route('files.index');
    }
}