@extends('template.app')

@section('titulo')
    Mostrar categoria
@endsection

@section('contenido')
    <div>
        <h4>
            {{$categorias->nombrecategoria}}    
        </h4>    
    </div>    
@endsection