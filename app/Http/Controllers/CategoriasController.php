<?php

namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $categoria = new Categoria;
        $categoria->nombre=$request->get('nombrea');
        $categoria->image='';
        $categoria->save();
        return redirect()->route('categorias.show',['categoria'=>$categoria->id]);

        //$categoria = new Categoria();
        /*
        $categoria = new Categoria;
        //asignamos en el campo de la tabla de la base de datos (cualquier campo que hayamos puesto en la base de datos)
        //Aqui va el nombre de el input del formulario
        $categoria->nombre = $request->get('nombre');
        //iNGRESAR CAMPO DE IMAGEN Y RUTA DONDESE ALMACENARA
        $categoria->image = '';
        $categoria->save();
        */
        /*
        //recibir formulario en formato json
        return $request->all();
        */
        
        // redirecciona a una ruta que asignemos despues de enviar los datos 
        /*
        return redirect()->route('categorias.show', ['categoria'=>$categoria->$id]);
        */
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categoria = Categoria::find($id);
        return view('categorias.show',compact('categoria'));

        //retornamos los datos
        //$categoria = Categoria::find($id);
        //return view('categorias.show', compact('categoria'));
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
