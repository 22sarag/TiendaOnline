<x-app-layout>
    <x-slot name="header">
        <div class="d-flex justify-content-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Crear Nuevo Producto') }}
            </h2>            
        </div>       
    </x-slot>
    
    <div class="py-6">
        @if ($errors->any())
        <div class="alert alert-danger" style="margin-top: 20px;">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="card">
                    <div class="card-header">
                        <h2>Formulario Nuevo Producto</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{route('productos.store')}}" method="POST">
                            @csrf       
                            <div class="form-group pb-2">
                                <label>Nombre Producto:</label>
                                <input class="form-control" type="text" name="nombre" placeholder="Nombre del producto">
                            </div>
                            <div class="form-group pb-2">
                                <label>Fecha de Elaboración:</label>
                                <input class="form-control" type="date" name="fecha_elaboracion">
                            </div>
                            <div class="form-group pb-2">
                                <label>Fecha de Vencimiento:</label>
                                <input class="form-control" type="date" name="fecha_vencimiento">
                            </div>
                            <div class="form-group pb-2">
                                <label>Precio de Compra:</label>
                                <input class="form-control" type="number" name="compra_producto_cant">
                            </div>
                            <div class="form-group pb-2">
                                <label>Cantidad Disponible:</label>
                                <input class="form-control" type="number" name="cantidad_disponible">
                            </div>
                            <div class="form-group pb-2">
                                <label>Precio de Venta:</label>
                                <input class="form-control" type="number" name="precio_venta">
                            </div>
                            <div class="form-group pb-2">
                                <label>Tipo de Producto:</label>
                                <select class="form-select" name="tipo_productos">
                                    @foreach ($tipo_productos as $tipo_producto)
                                        <option value="{{$tipo_producto->id}}">{{$tipo_producto->nombre}}</option>
                                    @endforeach                                                                        
                                </select>
                            </div>                            
                            <button class="btn btn-primary btn-block mt-2" type="submit">Enviar</button>                         
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
