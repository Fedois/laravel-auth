@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1 class="my-3">Tutti i progetti</h1>

        <ul>
            @foreach ($projects as $project)
                <a href="">
                    <li class="list-style-none">
                        {{ $project->title }}
                    </li>
                </a>
            @endforeach
        </ul>
    </div>
@endsection