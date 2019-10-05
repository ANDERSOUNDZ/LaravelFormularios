@extends('template.app')

@section('titulo')
    Crear Categoria
@endsection

@section('contenido')
    <div>
    <form action="{{route('categorias.store')}}" method="POST">
            {{csrf_field()}}
            <div class="form-group {{$errors->has('nombrecategoria')?'has-error': ''}} ">
                    <label for="nombrecategoria">Nombre de la categoria:</label>
            <input type="text" name="nombrecategoria" id="nombrecategoria" placeholder="Nombre de la categoria" value="{{old('nombrecategoria')}}">
                    @if ($errors->has('nombrecategoria'))
                        <span class="help-block">
                            <strong>
                                {{$errors->first('nombrecategoria')}}
                            </strong>
                        </span>
                    @endif
            </div>
            <div class="form-group {{$errors->has('nombrecategoria')?'has-error':''}}">
                <label for="imagen">Imagen:</label>    
                <input type="file" name="imagen" id="imagen">
                @if ($errors->has('imagen'))
                    <span class="help-block">
                        <strong>
                            {{$errors->first('imagen')}}
                        </strong>
                    </span>
                @endif
            </div>
            <button type="submit">enviar</button>
        </form>
    </div>
@endsection