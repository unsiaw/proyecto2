
<tr>
    <th scope="row">{{ $taza->id }}</th>
    <td>{{ $taza->nombre }}</td>
    <td>{{ $taza->created_at->diffForHumans() }}</td>
    <td>
    	<a class="btn btn-primary" href="">Edit</a>
    	<a class="btn btn-info" href="{{ route('tazas.uno', $taza->id) }}">Ver</a>
    	<a class="btn btn-danger" href="">Delete</a></td>
   </td>
</tr>
    	