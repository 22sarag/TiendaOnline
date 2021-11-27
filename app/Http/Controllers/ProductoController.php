<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\TipoProducto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::All();
        $tipoproductos = TipoProducto::All();

        return view('productos.index', compact(['productos','tipoproductos']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoproductos = TipoProducto::All();

        return view('productos.create', compact('tipoproductos'));
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
            'fecha_elaboracion' => 'required|date',
            'fecha_vencimiento' => 'required|date',
            'compra_producto_cant' => 'required',
            'cantidad_disponible' => 'required',
            'precio_venta' => 'required',
            'tipoproductos' => 'required'
        ]);

        $producto = new Producto;
        $producto->nombre = $request->input('nombre');
        $producto->fecha_elaboracion = $request->input('fecha_elaboracion');
        $producto->fecha_vencimiento = $request->input('fecha_vencimiento');
        $producto->compra_producto_cant = $request->input('compra_producto_cant');
        $producto->cantidad_disponible = $request->input('cantidad_disponible');
        $producto->precio_venta = $request->input('precio_venta');
        $producto->tipo_producto_id = $request['tipoproductos'];

        $producto->save();

        $productos = Producto::All();
        $tipoproductos = TipoProducto::All();

        return view('productos.index', compact(['productos','tipoproductos']));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        $tipoproductos = TipoProducto::All();
        return view('productos.show', compact(['producto', 'tipoproductos']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        //$producto=Producto::find('id');
        $tipoproductos = TipoProducto::All();

        return view('productos.edit',compact('producto','tipoproductos'));

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
        $producto=Producto::find('id');
        $producto->nombre = $request->input('nombre');
        $producto->fecha_elaboracion = $request->input('fecha_elaboracion');
        $producto->fecha_vencimiento = $request->input('fecha_vencimiento');
        $producto->compra_producto_cant = $request->input('compra_producto_cant');
        $producto->cantidad_disponible = $request->input('cantidad_disponible');
        $producto->precio_venta = $request->input('precio_venta');
        $producto->tipo_producto_id = $request['tipo_productos'];
        $producto->update();


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();

        return redirect()->route('productos.index');
    }
}
