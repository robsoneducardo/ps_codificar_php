@extends('layout.app')
@section('content')
    @if(isset($seller))
        <p>há seller</p>
    @else
        <p>não há seller</p>
    @endif
@endsection
