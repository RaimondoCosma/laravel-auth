@extends('layouts.admin')

@section('content')
    <h1>Lista Progetti</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titolo</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Slug</th>
                <th scope="col">Link</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <th scope="row">{{ $project->id }}</th>
                    <td>{{ $project->title }}</td>
                    <td>{{ $project->description }}</td>
                    <td>{{ $project->slug }}</td>
                    <td><a class="btn btn-primary" href="{{ route('admin.projects.show', $project->slug) }}">Dettagli</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
