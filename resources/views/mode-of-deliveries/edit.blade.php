@extends('layouts.app')

@section('content')
    <form action="/mode-of-deliveries/{{ $modeOfDelivery->id }}" class="w-full max-w-sm" method="POST">
        @csrf
        @method('patch')
        @include('mode-of-deliveries.components.form')
    </form>
@endsection