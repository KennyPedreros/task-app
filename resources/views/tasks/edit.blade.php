@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Editar Tarea</h1>

    <form action="/tasks/{{ $task->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Título</label>
            <input type="text" name="title" class="form-control" value="{{ $task->title }}">
        </div>

        <div class="mb-3">
            <label>Descripción</label>
            <textarea name="description" class="form-control" rows="3" >{{ $task->description }}</textarea>
        </div>

        <div class="mb-3">
            <label>Categoría</label>
            <select name="category_id" class="form-control">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $task->category_id == $category->id ? 'selected' : ''}}>{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection