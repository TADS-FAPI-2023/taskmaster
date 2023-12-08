<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\Mime\Part\File;

class Profile extends Controller
{
    private $objUser;
    public function __construct()
    {
        $this->objUser = new User();
    }

    public function profile($id)
    {
        $User = $this->objUser->findOrFail($id);
        $event = User::findOrFail($id);

        $userProfile = User::where('id', $event->id)->first()->toArray();
        return view("header") . view("profile", ['id' => $id, 'userProfile' => $userProfile], compact('User'));
    }
    public function edit($id)
    {
        $event = User::findOrFail($id);

        $users = User::where('id', $event->id)->first()->toArray();
        return view("header") . view("editProfile")->with('user', $users);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'bio' => 'nullable|min:1|max:255',
            'image' => 'image',
        ]);
        
        $user = User::find($id);
        
        if ($request->hasFile('image')) {
            $image_name = time() . '.' . $request->image->extension();
            // $request->image->move(public_path('storage/profile'), $image_name);

            // Mova a imagem para o diretório storage
            $request->image->storeAs('profile', $image_name, 'public');

            // Se o usuário já tinha uma imagem, exclua a antiga
            if ($user->image) {
                Storage::disk('public')->delete("profile/{$user->image}");
            }

            // Atualize o nome da imagem no banco de dados
            $user->image = $image_name;
        }

        // Atualize outros campos do usuário
        $user->update([
            'bio' => $request->input('bio'),
            // Outros campos que você queira atualizar
        ]);

        return redirect()->route('profile', auth()->user()->id);
    }
}
