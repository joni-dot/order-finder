<!DOCTYPE html>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Order finder</title>

<link href="{{ mix('/css/app.css') }}" rel="stylesheet">

<livewire:styles>

<nav class="flex items-center justify-between flex-wrap bg-teal-500 p-6">
    <div>
        <span class="font-semibold text-xl text-white">Order finder</span>
    </div>
    <div>
        <livewire:auth.log-out />
    </div>
</nav>

<div class="flex flex-wrap my-4 mx-4">
    <div class="w-1/3">
        <div class="bg-white w-full">
            <ul class="list-reset">
                <li>
                    <a href="{{ route('dashboard') }}" class="inline-flex items-center m-2 my-2">
                        <div class="{{ request()->route()->named('dashboard') ? 'bg-white' : 'bg-blue-700' }} inline-block rounded-full w-6 h-6 mr-2 border-solid border-blue-700 border-4">&nbsp;</div> 
                        <div class="inline-block rounded-full bg-blue-700 text-white p-1 px-4 text-xs font-bold">Dashboard</div>
                    </a>
                </li>
                <li >
                    <a href="{{ route('dashboard.carriers.index') }}" class="inline-flex items-center m-2 my-2">
                        <div class="{{ request()->route()->named('dashboard.carriers.index') ? 'bg-white' : 'bg-blue-700' }} inline-block rounded-full w-6 h-6 mr-2 border-solid border-blue-700 border-4">&nbsp;</div> 
                        <div class="inline-block rounded-full bg-blue-700 text-white p-1 px-4 text-xs font-bold">Carriers</div>
                    </a>
                </li>
                <li >
                    <a href="{{ route('dashboard.orders.index') }}" class="inline-flex items-center m-2 my-2">
                        <div class="{{ request()->route()->named('dashboard.orders.index') ? 'bg-white' : 'bg-blue-700' }} inline-block rounded-full w-6 h-6 mr-2 border-solid border-blue-700 border-4">&nbsp;</div> 
                        <div class="inline-block rounded-full bg-blue-700 text-white p-1 px-4 text-xs font-bold">Orders</div>
                    </a>
                </li>
                <li >
                    <a href="{{ route('dashboard.vendors.index') }}" class="inline-flex items-center m-2 my-2">
                        <div class="{{ request()->route()->named('dashboard.vendors.index') ? 'bg-white' : 'bg-blue-700' }} inline-block rounded-full w-6 h-6 mr-2 border-solid border-blue-700 border-4">&nbsp;</div> 
                        <div class="inline-block rounded-full bg-blue-700 text-white p-1 px-4 text-xs font-bold">Vendors</div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="w-2/3 pl-5 pr-5">
        {!! $slot !!}
    </div>
</div>

<livewire:scripts>