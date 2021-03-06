
<tr>
    <th scope="row">{{ $auto->id }}</th>
    <td>{{ $auto->created_at->diffForHumans() }}</td>
    <td>{{ $auto->user->name }}</td>
    <td>
        {{ Form::open(['route' => ['autos.admin.destroy', $auto->id], 'method' => 'delete', 'class' => 'form-inline']) }}
        <a class="btn btn-info" href="{{ route('autos.uno', $auto->id) }}">Ver</a>
        {{ Form::submit('Borrar', ['class' => 'btn btn-danger']) }}
        {{ Form::close() }}
    </td>
</tr>