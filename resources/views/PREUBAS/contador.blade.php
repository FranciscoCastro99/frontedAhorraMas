<h1>Todos los registros</h1>

<table>
    @forelse ($data as $item)
        <tr>
            <td>
                {{ $item['nombre_contador'] }}<br>
                {{ $item['num_contador'] }}<br>
            </td>
        </tr>
    @empty
        <tr>
            <td>No hay registros disponibles.</td>
        </tr>
    @endforelse
</table>
