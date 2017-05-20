@extends('layouts.app')

@section('content')
    {{ $tazas->id }}
    {{ $tazas->nombre }}
    <img src="{{ Storage::url($tazas->taza) }}" />
@endsection