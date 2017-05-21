
<tr>
    <th scope="row">{{ $taza->id }}</th>
    <td>{{ $taza->nombre }}</td>
    <td>{{ $taza->created_at->diffForHumans() }}</td>
    <td>
    	<a class="btn btn-info" href="{{ route('tazas.uno', $taza->id) }}">Ver</a>
        <button type="submit" class="btn btn-danger">Borrar</button>
   </td>
</tr>
    	