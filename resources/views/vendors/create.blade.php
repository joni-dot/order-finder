@extends('layouts.app')

@section('content')
    <form action="/vendors" class="w-full max-w-sm" method="POST">
        @csrf
        @include('vendors.components.form')
    </form>
@endsection