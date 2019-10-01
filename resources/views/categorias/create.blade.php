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
        {{ 
            //crear campos ocultos , " csrf_field() " token de verificacion de datos, revisar este enlace (https://es.stackoverflow.com/questions/102233/qu%C3%A9-es-exactamente-el-token-csrf-field-que-se-le-a%C3%B1ade-a-los-formulario-en-lara)
            csrf_field()
            }}
            <div>
                    <input type="text" name="nombrea">
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