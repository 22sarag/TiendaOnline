<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use App\Models\TipoProducto;
use Illuminate\Http\Request;

class TipoProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoproductos = TipoProducto::all();
        $proveedores = Proveedor::all();
        return view('tipoproductos.index', compact(['tipoproductos', 'proveedores']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proveedores = Proveedor::all();
        return view('tipoproductos.create', compact('proveedores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'cantidad' => 'required',
            'proveedor_id' => 'required'            
        ]);

        $tipoproducto = new TipoProducto;
        $tipoproducto->nombre = $request->input('nombre');
        $tipoproducto->descripcion = $request->input('descripcion');
        $tipoproducto->cantidad = $request->input('cantidad');
        $tipoproducto->proveedor_id = $request['proveedor_id'];

        $tipoproducto->save();

        $tipoproductos = TipoProducto::all();
        $proveedores = Proveedor::all();
        return view('tipoproductos.index', compact(['tipoproductos', 'proveedores']));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(TipoProducto $tipoproducto)
    {
        //$tipoproducto = TipoProducto::find($tipoproducto->id);
        $proveedores = Proveedor::all();
        return view('tipoproductos.show', compact(['tipoproducto', 'proveedores']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoProducto $tipoproducto)
    {
        $proveedores = Proveedor::all();
        return view('tipoproductos.edit', compact(['tipoproducto','proveedores']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoProducto $tipoproducto)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'cantidad' => 'required',
            'proveedor_id' => 'required'            
        ]);
        $tipoproducto->nombre = $request->input('nombre');
        $tipoproducto->descripcion = $request->input('descripcion');
        $tipoproducto->cantidad = $request->input('cantidad');
        $tipoproducto->proveedor_id = $request['proveedor_id'];

        $tipoproducto->save();

        $tipoproductos = TipoProducto::all();
        $proveedores = Proveedor::all();
        return view('tipoproductos.index', compact(['tipoproductos', 'proveedores']));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoProducto $tipoproducto)
    {
        $tipoproducto->delete();
        return redirect()->route('tipoproductos.index');
    }
}
