<div class="grid grid-cols-2 gap-4">

    <div class="bg-white rounded-xl p-4 shadow-xl mt-4">
        <div class="flex flex-col justify-center items-center">
           <img src="{{asset('img/compra.png')}}" class="w-auto h-40 rounded-lg"/>
            <p class="font-semibold text-xl mt-1">Realiza tus compras</p>
            <p class="font-semibold text-sm text-gray-400 text-center">Consigue lo que buscas <br> accediendo al enlace</p>
            <a href="{{route('compras.index')}}" class=" mt-4 bg-indigo-600 hover:bg-indigo-700 shadow-xl text-white font-bold py-2 px-4 rounded">
                Ingresar a Comprar
            </a>
            
        </div>
    </div>
    
    <div class="bg-white rounded-xl p-4 shadow-xl mt-4">
        <div class="flex flex-col justify-center items-center">
           <img src="{{asset('img/pedido.png')}}" class="w-auto h-40 rounded-lg"/>
            <p class="font-semibold text-xl mt-1">Realiza tu pedido</p>
            <p class="font-semibold text-sm text-gray-400 text-center">Reserva tu producto <br> accediendo al enlace</p>
            <a href="" class=" mt-4 bg-indigo-600 hover:bg-indigo-700 shadow-xl text-white font-bold py-2 px-4 rounded">
                Ingresar a Pedido
            </a>
            
        </div>
    </div>

</div>