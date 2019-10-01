@extends('layouts.app')

@section('titulo')
    mostrar categoria
@endsection

@section('contenido')
    <div>
        <p>{{$categoria->nombre}}</p>
    </div>
@endsection