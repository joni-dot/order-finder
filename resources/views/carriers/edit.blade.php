@extends('layouts.app')

@php 
    $navItems = [
        [
            'text' => 'Information',
            'route' => 'carriers.edit',
            'parameters' => ['carrier' => $carrier->id],
        ],
        [
            'text' => 'Mode of transports',
            'route' => 'carriers.mode-of-transports.index',
            'parameters' => ['carrier' => $carrier->id]
        ],
    ];
@endphp 

@section('content')
    <x-tabs.simple :items="$navItems"/>
    <livewire:carriers.edit-carrier :carrier="$carrier">
@endsection