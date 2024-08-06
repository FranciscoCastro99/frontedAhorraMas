<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Simulador</title>
    <!-- Puedes incluir aquí el enlace a tu archivo de estilos CSS -->
</head>
<body>
    <h1>Formulario para Simulador</h1>
    
    <!-- Asegúrate de que la ruta esté definida en tus archivos de rutas de Laravel -->
    <form action="{{ route('simulador.store') }}" method="POST">
        @csrf
        <div>
            <label for="presupuesto_id">Presupuesto ID:</label>
            <input type="number" id="presupuesto_id" name="presupuesto_id" required>
        </div>
        <div>
            <label for="alcantarillado">Alcantarillado:</label>
            <input type="number" id="alcantarillado" name="alcantarillado" step="0.01" required>
        </div>
        <div>
            <label for="cargo_fijo">Cargo Fijo:</label>
            <input type="number" id="cargo_fijo" name="cargo_fijo" step="0.01" required>
        </div>
        <div>
            <button type="submit">Enviar</button>
        </div>
    </form>
</body>
</html>
