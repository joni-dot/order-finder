@extends('layouts.app')

@section('content')
    @include('carriers.components.sub-nav', ['carrier' => $carrier])
@endsection