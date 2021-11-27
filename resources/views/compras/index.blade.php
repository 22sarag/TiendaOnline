<x-app-layout>
    <x-slot name="header">
        <div class="d-flex justify-content-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Productos') }}
            </h2>            
        </div>       
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="grid grid-cols-4 gap-4">
                    @foreach ($productos as $producto)
                    <form action="{{route('compras.store')}}" method="POST">
                        @csrf
                    <div class="bg-white rounded-xl p-4 shadow-xl mt-4">
                        <div class="flex flex-col">
                                @error('cantidad')
                                    <p class="text-red-500">{{$message}}</p>
                                @enderror
                                <p class="font-semibold text-xl mt-1 text-center">{{$producto->nombre}}</p>
                                <p class="font-semibold text-sm text-gray-500 text-left">Fecha Elaboracion: {{$producto->fecha_elaboracion}} <br> Fecha Vencimiento: {{$producto->fecha_vencimiento}}</p>
                                <p class="font-bold text-lg text-gray-800 text-left">Precio: {{$producto->precio_venta}} Bs.</p>
                                <input type="hidden" name="producto_id" value="{{$producto->id}}">                                
                                <input type="number" name="cantidad" placeholder="Cantidad" min="1" pattern="^[0-9]+"><br>
                                @foreach ($tipoproductos as $tipoproducto)
                                    @if ($producto->tipo_producto_id == $tipoproducto->id)
                                        <div class="bg-indigo-200 rounded-md p-2 flex items-center">
                                            <p class="text-indigo-600 font-bold text-sm">{{$tipoproducto->nombre}}</p>
                                        </div>                                                                
                                    @endif
                                @endforeach
    
                                <button type="submit" class=" mt-4 bg-indigo-600 hover:bg-indigo-700 shadow-xl text-white font-bold py-2 px-4 rounded">
                                    Comprar
                                </button>                                                            
                            </div>
                        </div>
                    </form>                           
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
