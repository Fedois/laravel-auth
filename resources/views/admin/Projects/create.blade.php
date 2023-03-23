@extends('layouts.admin')

@section('content')
    <div class="container">
        <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary my-1">Torna indietro</a>

            <form action="{{ route('admin.projects.store') }}" method="POST">
                @csrf

               @include('partials.errors')

                <div class="my-3">
                    <label for="title" class="form-label">Titolo*</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="aggiungi titolo..." value="{{ old('title') }}">
                </div>
                
                <div class="my-3">
                    <label for="content" class="form-label">Contenuto*</label>
                    <textarea class="form-control" id="content" name="content" rows="3">{{ old('content') }}</textarea>
                </div>

                <div class="my-3">
                    <label for="img" class="form-label">Immagine</label>
                    <input type="file" class="form-control" id="img" name="img" placeholder="aggiungi immagine..." accept="image/*">
                </div>
    
                <button type="submit" class="btn btn-primary">Crea</button>
            </form>
    </div>
@endsection