
<tr>
    <th scope="row">{{ $auto->id }}</th>
    <td>{{ $auto->created_at->diffForHumans() }}</td>
    <td><a href="{{ route('autos.uno', $auto->id) }}">Ver</a></td>
</tr>

