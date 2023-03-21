@extends('layouts.admin')

@section('content')
    <div class="container">
        <a href="{{ route('admin.projects.index') }}" class="btn btn-primary mt-1">Torna indietro</a>
        <h1 class="my-3">{{ $project->title }}</h1>
        <p>{{ $project->content }}</p>
    </div>
@endsection