@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Nueva Tarea</h1>

    <form action="/tasks" method="POST">
        @csrf

        <div class="mb-3">
            <label>Título</label>
            <input type="text" name="title" class="form-control">
        </div>

        <div class="mb-3">
            <label>Descripción</label>
            <textarea name="description" class="form-control" rows="3"></textarea>
        </div>

        <div class="mb-3">
            <label>Categoría</label>
            <select name="category_id" class="form-control">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection