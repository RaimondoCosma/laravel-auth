@extends('layouts.admin')

@section('content')
    <section class="container">
        <h1 class="text-center">Aggiungi Progetto:</h1>
        <form action="{{ route('admin.projects.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titolo*</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                    value="{{ old('title') }}" placeholder="Inserisci il Titolo">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione*</label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                    rows="10" placeholder="Inserisci Descrizione">{{ old('description') }}</textarea>
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Crea</button>
        </form>
    </section>
@endsection
