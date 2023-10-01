@extends('layouts.app')
@section('title', 'Task')
@section('content_header', 'Task')
@section('content')
    <a class="btn btn-primary btn-xl" href="{{ route('files.create') }}"><i class="fa-solid fa-plus"></i> Add project</a><br><br>
    @if ($files->count() > 0)
        <div class="row">
            @foreach ($files as $item)
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        @if (in_array($item->extension, ['.jpg', '.jpeg', '.png', '.gif']))
                            <img src="{{ $item->file_url }}" class="card-img-top">
                        @else
                            <img src="{{ asset('img/arquivox.png') }}" class="card-img-top">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->extension }}</h5>
                            <p class="card-text">{{ $item->description }}</p>
                            <a href="{{ route('files.edit', $item->id) }}" class="btn btn-warning"> <i
                                    class="fa-solid fa-pen-clip"></i> Edit File</a>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#modal-file-{{ $item->id }}">
                                <i class="fa-solid fa-ban"></i> Delete File
                            </button>
                            <div class="modal fade" id="modal-file-{{ $item->id }}" tabindex="-1"
                                aria-labelledby="label-file-{{ $item->id }}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="label-file-{{ $item->id }}">Delete File</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="{{ $item->file_url }}" style="width: 30%;"><br><br>
                                            <h5>Are you sure you want to delete this file?</h5>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Cancel</button>
                                            <form action="{{ route('files.destroy', $item->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
    <div class="alert alert-info" role="alert">
        You don't have any files, click <b>"Add project"</b>.
    </div>
@endif

@endsection
