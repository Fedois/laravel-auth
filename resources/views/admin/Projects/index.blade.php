@extends('layouts.admin')

@section('content')
    <div class="container all-projects">
        <h1 class="my-3">Tutti i progetti</h1>

        @include('partials.success')

        <a href="{{ route('admin.projects.create') }}" class="btn btn-primary mb-2">Nuovo Progetto</a>

        <ul class="list-group">
            @foreach ($projects as $project)
                <li class="my-1 list-group-item">
                    <a href="{{ route('admin.projects.show', $project->id) }}" class="text-dark text-decoration-none">

                        {{ $project->title }}

                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection

<style>
    li a:hover{
        text-decoration: underline !important;
    }
</style>