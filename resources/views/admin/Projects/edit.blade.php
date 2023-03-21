@extends('layouts.admin')

@section('content')
    <div class="container">
        <a href="{{ route('admin.projects.show', $project->id) }}" class="btn btn-secondary my-1">Torna indietro</a>

            <form action="{{ route('admin.projects.update', $project->id) }}" method="POST">
                @csrf
                @method('PUT')

               @include('partials.errors')

                <div class="my-3">
                    <label for="title" class="form-label">Titolo*</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $project->title }}">
                </div>
                
                <div class="my-3">
                    <label for="content" class="form-label">Contenuto*</label>
                    <textarea class="form-control" id="content" name="content" rows="3">{{ $project->content }}</textarea>
                </div>
    
                <button type="submit" class="btn btn-primary">Modifica</button>
            </form>
    </div>
@endsection