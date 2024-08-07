@extends('Plantilla')
    @section('contenido')
    <div class="d-flex justify-content-center align-items-center flex-column" style="height: calc(100vh - 56px);">
        <h1 class="mb-3">Mostrar Profesor</h1>
        <div class="w-25">
            <div class="form-floating mb-3">
                <input name="nombre" type="text" class="form-control" id="nombre" value="{{$profesor->nombre}}" disabled>
                <label for="nombre">Nombre</label>
            </div>
            <div class="form-floating mb-3">
                <input name="apellido" type="text" class="form-control" id="apellido" value="{{$profesor->apellido}}" disabled>
                <label for="apellido">Apellido</label>
            </div>
            <div class="form-floating mb-3">
                <input name="direccion" type="text" class="form-control" id="direccion" value="{{$profesor->direccion}}" disabled>
                <label for="direccion">Dirección</label>
            </div>
            <div class="form-floating mb-3">
                <input name="ciudad" type="text" class="form-control" id="ciudad" value="{{$profesor->ciudad}}" disabled>
                <label for="ciudad">Ciudad</label>
            </div>
            <div class="form-floating mb-3">
                <input name="departamento" type="text" class="form-control" id="departamento" value="{{$profesor->departamento}}" disabled>
                <label for="departamento">Departamento</label>
            </div>
        </div>
    </div>


    @endsection
