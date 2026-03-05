@extends('layouts.app')

@section('content')
 <h1 class="mb-4">Nueva Categoria</h1>

    <form action="/categories" method="POST">
        @csrf

        <div class="mb-3">
            <label>Nombre</label>
            <input type="text" name="name" class="form-control">
        </div>

        <div class="mb-3">
            <label>Descripción</label>
            <textarea name="description" class="form-control" rows="3"></textarea>
        </div>

        <div class="mb-3">
            <label>Color</label>
            <input type="text" name="color" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection