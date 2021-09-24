<x-app-layout>
    <x-slot name="header">
        <div class="d-flex justify-content-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Producto Detalle') }}
            </h2>            
        </div>       
    </x-slot>
    
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title"><strong>Nombre de Producto: </strong> {{$producto->nombre}}</h2>
                    </div>
                    <div class="card-body">
                        <p><strong>Fecha de Elaboración: </strong> {{$producto->fecha_elaboracion}}</p>
                        <p><strong>Fecha de Vencimiento: </strong> {{$producto->fecha_vencimiento}}</p>
                        <p><strong>Precio de Compra: </strong> {{$producto->compra_producto_cant}}</p>
                        <p><strong>Cantidad Disponible: </strong> {{$producto->cantidad_disponible}}</p>
                        <p><strong>Precio de Venta: </strong> {{$producto->precio_venta}}</p>
                        
                        @foreach ($tipo_productos as $tipo_producto)
                            @if ($producto->tipo_producto_id == $tipo_producto->id)
                                <p><strong>Tipo de Producto: </strong> {{$tipo_producto->nombre}}</p>    
                            @endif
                        @endforeach                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
