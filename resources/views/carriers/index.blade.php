@extends('layouts.app')

@section('content')
    <div class="text-right">
        <x-anchors.buttons.create :href="'/carriers/create'" :text="'New carrier'"/>
    </div>
    <div class="my-4">
        <x-listing.list :items="$carriers"/>
    </div>
@endsection