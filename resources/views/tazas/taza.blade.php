
<tr>
    <th scope="row">{{ $taza->id }}</th>
    <td>{{ $taza->nombre }}</td>
    <td>{{ $taza->created_at->diffForHumans() }}</td>
    <td><a href="{{ route('tazas.uno', $taza->id) }}">Ver</a> - Eliminar?</td>
</tr>

