<?php

namespace App\Http\Controllers;

use App\Models\Formulario;
use Illuminate\Http\Request;

class FormularioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $formulario = Formulario::all();
        return view ('formularios.index',compact('formulario'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formularios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formulario = new Formulario();
        $formulario->nombre_formulario = $request->input('nombre_formulario');

        $formulario->descripcion_formulario = $request->input('descripcion_formulario');

        if($request->hasFile('imagen')){
            $formulario->imagen = $request->file('imagen')->store('public/formularios');

        $formulario->save();
        return view('formularios.create');


        }
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $formulario = Formulario::find($id);
        return view('formularios.show', compact('formulario'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $formulario = Formulario::find($id);
        return view('formularios.edit',compact('formulario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $formulario=Formulario::find($id);$formulario->fill($request->except('imagen'));
        if($request->hasFile('imagen')){
            $formulario->imagen=$request->file('imagen')->store('storage/formularios');
        }
        $formulario->save();
        return 'se guardo con exito';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $datosformulario=Formulario::find($id);
        $datosformulario->delete();
        return redirect()->back();
    }
}
