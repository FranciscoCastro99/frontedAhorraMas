@extends('Plantilla')
    @section('')


    @section('contenido')
        <div class="grid grid-cols-2 p-4 w-1/2">
            <div class="h-screen flex flex-col ml-8 py-4 gap-8 items-center" >
                <h2 class="text-2xl">Historial de Consumo</h2>
                <button class="bg-verdeBotones w-1/3 rounded-lg h-8" type="">Mensual</button>
                <button class="bg-verdeBotones w-1/3 rounded-lg h-8" type="">Anual</button>

            </div>
            <div class="w-screen">
                <h2 class="p-8">grafica</h2>
            </div>
        </div>
    @endsection
