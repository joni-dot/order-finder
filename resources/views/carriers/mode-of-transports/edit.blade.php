@extends('layouts.app')

@section('content')
    <livewire:carriers.mode-of-transports.edit-carrier-mode-of-transport 
        :carrier="$carrier"
        :mode-of-transport="$modeOfTransport"
    >
@endsection