@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Categorias</h1>
        <a href="/categories/create" class="btn btn-primary">Nueva Categoria</a>
    </div>
    @foreach($categories as $category)
        <div class="card mb-3">
            <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                    <h6 class="card-title">{{ $category->name }}</h6>
                </div>
                <div>
                    <a href="/categories/{{ $category->id }}/edit" class="btn btn-sm btn-warning">Editar</a>
                    <form action="/categories/{{ $category->id }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endsection