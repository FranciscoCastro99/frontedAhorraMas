@extends('Plantilla')
    @section('')


    @section('contenido')
        <div class="grid grid-cols-2 p-4 w-1/2">
            <div class="h-screen flex flex-col ml-8 py-4 gap-8 items-center" >
                <h2 class="text-2xl">Historial de Consumo</h2>
                <a href="{{route('perfil.Historial')}}" class="bg-verdeBotones hover:bg-green-500 text-white text-center h-auto w-1/2 py-2 rounded-xl">Mensual</a>
                <a href="{{route('perfil.HistorialAnual')}}" class="bg-verdeBotones hover:bg-green-500 text-white text-center h-auto w-1/2 py-2 rounded-xl">Anual</a>
                {{-- <input class="bg-verdeBotones w-1/3 rounded-lg h-8" type="">Anual</input> --}}

            </div>
            <div class="w-screen">
                @yield('grafica')
                <div class="w-8/12">
                    <canvas id="myChart"></canvas>
                </div>

              <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

              <script>
                const ctx = document.getElementById('myChart');

                new Chart(ctx, {
                  type: 'bar',
                  data: {
                    labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio','Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                    datasets: [{
                      label: 'Gasto Mensual',
                      data: [12000, 19000, 30000, 50000, 20000, 30000,12000, 19000, 30000, 50000, 20000, 30000,],
                      borderWidth: 1
                    }]
                  },
                  options: {
                    scales: {
                      y: {
                        beginAtZero: true
                      }
                    }
                  }
                });
              </script>

            </div>
        </div>
    @endsection
