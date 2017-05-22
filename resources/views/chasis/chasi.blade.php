
<tr>
    <th scope="row">{{ $chasi->id }}</th>
    <td>{{ $chasi->nombre }}</td>
    <td>{{ $chasi->created_at->diffForHumans() }}</td>
    <td>
        {{ Form::open(['route' => ['chasis.destroy', $chasi->id], 'method' => 'delete', 'class' => 'form-inline']) }}
        <a class="btn btn-info" href="{{ route('chasis.uno', $chasi->id) }}">Ver</a>
        {{ Form::submit('Borrar', ['class' => 'btn btn-danger']) }}
        {{ Form::close() }}
    </td>
</tr>