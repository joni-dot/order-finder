@extends('layouts.app')

@section('content')
    @include('carriers.components.sub-nav', ['carrier' => $carrier])
    <div class="text-right">
        <x-anchors.buttons.create :href="route('carriers.mode-of-transports.create', $carrier->id)" :text="'New mode of transport'"/>
    </div>
@endsection