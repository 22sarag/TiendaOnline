<x-app-layout>
    <x-slot name="header">
        <div class="d-flex justify-content-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Productos') }}
            </h2>
            <a href="{{route('productos.create')}}" class="btn btn-primary">Crear Producto</a>
        </div>       
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="table table-striped">
                    <thead>
                        <tr>
                          <th scope="col">Id</th>
                          <th scope="col">Nombre</th>
                          <th scope="col">Fecha Elaboración</th>
                          <th scope="col">Fecha Vencimiento</th>
                          <th scope="col">Compra Producto Cantidad</th>
                          <th scope="col">Cantidad Disponible</th>
                          <th scope="col">Precio Venta</th>
                          <th scope="col">Tipo de Producto</th>
                          <th scope="col">Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($productos as $producto)
                          <tr>
                            <td>{{$producto->id}}</td>
                            <td>{{$producto->nombre}}</td>
                            <td>{{$producto->fecha_elaboracion}}</td>
                            <td>{{$producto->fecha_vencimiento}}</td>
                            <td>{{$producto->compra_producto_cant}}</td>
                            <td>{{$producto->cantidad_disponible}}</td>
                            <td>{{$producto->precio_venta}}</td>
                            <td>{{$producto->tipo_producto_id}}</td>
                            <td><a href="{{route('productos.show', $producto)}}" class="btn btn-sm btn-info text-light">Editar</a></td>
                          </tr>
                          @endforeach                        
                      </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
