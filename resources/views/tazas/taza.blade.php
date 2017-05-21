
<tr>
    <th scope="row">{{ $taza->id }}</th>
    <td>{{ $taza->nombre }}</td>
    <td>{{ $taza->created_at->diffForHumans() }}</td>
    <td>
        {{ Form::open(['route' => ['tazas.destroy', $taza->id], 'method' => 'delete', 'class' => 'form-inline']) }}
        <a class="btn btn-info" href="{{ route('tazas.uno', $taza->id) }}">Ver</a>
        {{ Form::submit('Borrar', ['class' => 'btn btn-danger']) }}
        {{ Form::close() }}
    </td>
</tr>
    	