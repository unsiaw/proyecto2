
<tr>
    <th scope="row">{{ $chasi->id }}</th>
    <td>{{ $chasi->nombre }}</td>
    <td>{{ $chasi->created_at->diffForHumans() }}</td>
    <td><a href="{{ route('chasis.uno', $chasi->id) }}">Ver</a> - Eliminar?</td>
</tr>

