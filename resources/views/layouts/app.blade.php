<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Order finder</title>
        <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
        <livewire:styles>
    </head>
    <body>
        <nav class="flex items-center justify-between flex-wrap bg-teal-500 p-6">
            <div class="flex items-center flex-shrink-0 text-white mr-6">
                <span class="font-semibold text-xl tracking-tight">Order finder</span>
            </div>
        </nav>
        <div class="flex flex-wrap my-4">
            <div class="w-1/3">
                <div class="bg-white w-full">
                    <ul class="list-reset">
                        <li >
                            <a href="/carriers" class="block p-4 text-grey-darker font-bold border-purple hover:bg-grey-lighter border-r-4">
                                Carriers
                            </a>
                        </li>
                        <li >
                            <a href="/mode-of-deliveries" class="block p-4 text-grey-darker font-bold border-grey-lighter hover:border-purple-light hover:bg-grey-lighter border-r-4">
                                Mode of deliveries
                            </a>
                        </li>
                        <li >
                            <a href="/orders" class="block p-4 text-grey-darker font-bold border-grey-lighter hover:border-purple-light hover:bg-grey-lighter border-r-4">
                                Orders
                            </a>
                        </li>
                        <li >
                            <a href="/vendors" class="block p-4 text-grey-darker font-bold border-grey-lighter hover:border-purple-light hover:bg-grey-lighter border-r-4">
                                Vendors
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="w-2/3 pl-5 pr-5">
                @yield('content')
            </div>
        </div>
        <livewire:scripts>
    </body>
</html>
