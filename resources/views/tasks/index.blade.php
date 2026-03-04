@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Tareas</h1>
        <a href="/tasks/create" class="btn btn-primary">Nueva Tarea</a>
    </div>

    @foreach($tasks as $task)
        <div class="card mb-3">
            <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                    <h5 class="card-title">{{ $task->title }}</h5>
                    <span class="badge bg-secondary">{{ $task->category->name }}</span>
                </div>
                <div>
                    <a href="/tasks/{{ $task->id }}/edit" class="btn btn-sm btn-warning">Editar</a>
                    <form action="/tasks/{{ $task->id }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endsection