@extends('layouts.app')

@section('content')
 <h1 class="mb-4">Editar Categoria</h1>

    <form action="/categories/{{ $category->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Nombre</label>
            <input type="text" name="name" class="form-control" value="{{ $category->name }}">
        </div>

        <div class="mb-3">
            <label>Descripción</label>
            <textarea name="description" class="form-control" rows="3" >{{ $category->description }}</textarea>
        </div>

        <div class="mb-3">
            <label>Color</label>
            <input type="text" name="color" class="form-control" value="{{$category->color }}">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection