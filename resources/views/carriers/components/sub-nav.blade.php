@php 
    $navItems = [
        [
            'text' => 'Information',
            'route' => 'dashboard.carriers.edit',
            'parameters' => ['carrier' => $carrier->slug],
        ],
        [
            'text' => 'Mode of transports',
            'route' => 'dashboard.carriers.mode-of-transports.index',
            'parameters' => ['carrier' => $carrier->slug]
        ],
    ];
@endphp 

<x-tabs.simple :items="$navItems"/>
