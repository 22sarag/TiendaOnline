<x-app-layout>    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <!-- component -->
                <div class="h-screen">
                    <div class="w-80 mt-24 m-auto lg:mt-16 max-w-sm">
                    <div class="bg-white shadow-2xl rounded-b-3xl">

                        @foreach ($productos as $producto)
                            @if ($compra->producto_id == $producto->id)
                            
                            <h2 class="text-center text-gray-800 text-2xl font-bold pt-4">Factura</h2>                        
                            <div class="grid grid-cols-4 w-72 lg:w-5/6 m-auto bg-indigo-50 mt-2 p-4 lg:p-4 rounded-2xl">
                            <div class="col-span-2 pt-1">
                                <p class="text-gray-800 font-bold lg:text-lg">Usuario:</p><p class="text-gray-800 font-regular lg:text-lg">{{$user->name}}</p>
                                <p class="text-gray-800 font-bold lg:text-lg">Cantidad:</p><p class="text-gray-800 font-regular lg:text-lg">{{$compra->cantidad}}</p>
                                <p class="text-gray-800 font-bold lg:text-lg">Precio Unitario:</p><p class="text-gray-800 font-regular lg:text-lg">{{$producto->precio_venta}}</p>
                                <p class="text-gray-800 font-bold lg:text-lg">Producto:</p><p class="text-gray-800 font-regular lg:text-lg">{{$producto->nombre}}</p>
                                <hr>
                                <p class="text-red-800 font-bold lg:text-lg">Precio Total:</p><p class="text-indigo-800 font-regular lg:text-lg">{{$producto->precio_venta * $compra->cantidad}}</p>                                        
                            </div>
                            @endif
                        @endforeach

                    </div>                                                
                    <div class="text-center">
                        <a class="p-2 pl-5 pr-5 bg-indigo-500 text-gray-100 text-md rounded-md focus:border-4 border-indigo-300" href="{{route('compras.index')}}">Volver</a>                    
                    </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
