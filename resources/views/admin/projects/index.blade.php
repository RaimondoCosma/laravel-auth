@extends('layouts.admin')

@section('content')
    <h1>Lista Progetti</h1>
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <div>
        <a class="btn btn-success" href="{{ route('admin.projects.create') }}">Aggiungi Progetto</a>
    </div>
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
                    <td><a class="btn btn-primary" href="{{ route('admin.projects.show', $project->slug) }}"><i
                                class="fa-regular fa-eye"></i></a></td>

                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
