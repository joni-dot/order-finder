@extends('layouts.app')

@section('content')
    <form action="/vendors/{{ $vendor->id }}" class="w-full max-w-sm" method="POST">
        @csrf
        @method('patch')
        @include('vendors.components.form')
    </form>
@endsection