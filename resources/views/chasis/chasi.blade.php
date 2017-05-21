
<tr>
    <th scope="row">{{ $chasi->id }}</th>
    <td>{{ $chasi->nombre }}</td>
    <td>{{ $chasi->created_at->diffForHumans() }}</td>
    <td>
    	<a class="btn btn-info" href="{{ route('chasis.uno', $chasi->id) }}">Ver</a>
    	<a class="btn btn-danger" href="">Borrar</a></td>
</tr>