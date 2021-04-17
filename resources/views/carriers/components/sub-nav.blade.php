@php 
    $navItems = [
        [
            'text' => 'Information',
            'route' => 'carriers.edit',
            'parameters' => ['carrier' => $carrier->slug],
        ],
        [
            'text' => 'Mode of transports',
            'route' => 'carriers.mode-of-transports.index',
            'parameters' => ['carrier' => $carrier->slug]
        ],
    ];
@endphp 

<x-tabs.simple :items="$navItems"/>
