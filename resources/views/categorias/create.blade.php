@extends('layouts.app')

@section('titulo')
    Crear categoria
@endsection

@section('contenido')

<div>
    <h1>Nueva Categoria</h1>
</div>
<div>
<form action="{{ route('categorias.store') }}" method="POST">
            <div>
                    <input type="text" name="nombre">
                </div>
                <div>
                    <input type="file" name="image">
            </div>
            <div>
                <button type="submit">Guardar</button>
            </div>
    </form>
</div>

@endsection