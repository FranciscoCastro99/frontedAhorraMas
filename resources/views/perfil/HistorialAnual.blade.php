@extends('perfil.Historial')
@section('grafica')
    <div class="w-8/12">
        <canvas id="anual"></canvas>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const ctx = document.getElementById('anual');

        new Chart (ctx, {
        type: 'bar',
        data: {
            labels: ['2013', '2014', '2015', '2016', '2017', '2018','2019', '2020', '2021', '2022', '2023', '2024'],
            datasets: [{
            label: 'Gasto Anual',
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
@endsection
