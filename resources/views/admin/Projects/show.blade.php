@extends('layouts.admin')

@section('content')
    <div class="container">
        <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary my-1">Torna indietro</a>

        @include('partials.success')

        <h1 class="my-3">{{ $project->title }}</h1>
        <p>{{ $project->content }}</p>
    </div>
@endsection