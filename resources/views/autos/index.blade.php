@extends('layouts.app')

@section('content')

    @foreach($autos as $auto)
        @include('autos.auto')
    @endforeach

@endsection