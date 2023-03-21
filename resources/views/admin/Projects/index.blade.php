@extends('layouts.admin')

@section('content')
    <div class="container all-projects">
        <h1 class="my-3">Tutti i progetti</h1>

        <a href="" class="btn btn-primary mb-2">Nuovo Progetto</a>

        <ul>
            @foreach ($projects as $project)
                <a href="{{ route('admin.projects.show', $project->id) }}">
                    <li class="my-1">
                        {{ $project->title }}
                    </li>
                </a>
            @endforeach
        </ul>
    </div>
@endsection