<h1>Todos los registros</h1>

<table>

    $@foreach ($data as $item){
        <tr>
            <td>
                {{$item['name']}}<br>
                {{$item['lastName']}}<br>
                {{$item['email']}}<br>

            </td>

        </tr>

    }
        
    @endforeach

</table>

