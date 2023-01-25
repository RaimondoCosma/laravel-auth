@extends('layouts.admin')

@section('content')
    <section class="container">
        <h1>{{ $project->title }}</h1>
        <h3 class="mt-4">Descrizione progetto:</h3>
        <p>{{ $project->description }}</p>
        <h3 class="mt-4">Slug del progetto</h3>
        <p>{{ $project->slug }}</p>
    </section>
@endsection
