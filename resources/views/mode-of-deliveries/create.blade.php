@extends('layouts.app')

@section('content')
    <form action="/mode-of-deliveries" class="w-full max-w-sm" method="POST">
        @csrf
        @include('mode-of-deliveries.components.form')
    </form>
@endsection