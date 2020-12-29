@extends('layouts.app')

@section('content')
    @include('carriers.components.sub-nav', ['carrier' => $carrier])
    <div class="text-right">
        <x-anchors.buttons.create :href="route('carriers.mode-of-transports.create', $carrier->id)" :text="'New mode of transport'"/>
    </div>
    <div class="my-4">
        <x-listing.listing :items="$carrierModeOfTransports" :items-name="'carriers.mode-of-transports'"/>
    </div>
@endsection