<h1>Todos los registros</h1>

<table>

    $@foreach ($data as $item){
        <tr>
            <td>
                {{$item['nombre_contador']}}<br>
                {{$item['num_contador']}}<br>
            </td>

        </tr>

    }
        
    @endforeach

</table>

