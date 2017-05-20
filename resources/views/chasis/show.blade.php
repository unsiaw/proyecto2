@extends('layouts.app')

@section('content')
    {{ $chasis->id }}
    {{ $chasis->nombre }}
    <img src="{{ Storage::url($chasis->fondo) }}" />
@endsection