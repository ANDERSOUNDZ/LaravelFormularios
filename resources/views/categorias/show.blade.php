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
    <div>
    <p>Creadeo el dia: {{$categorias->create_at}}</p>
    </div>
    <div>
        @if ($categorias->imagen)
    <a href="{{ asset($categorias->imagen)}}" class="thumbnail" target="_blanck">
    <img src="{{ asset($categorias->imagen)}}">
    </a>
        @endif
    </div>
@endsection