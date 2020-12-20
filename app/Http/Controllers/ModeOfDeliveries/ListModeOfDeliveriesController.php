<?php

namespace App\Http\Controllers\ModeOfDeliveries;

use App\Http\Controllers\Controller;
use App\Models\ModeOfDelivery;

class ListModeOfDeliveriesController extends Controller
{
    /**
     * List mode of deliveries.
     *
     * @return View
     */
    public function __invoke()
    {
        return view('mode-of-deliveries.index', [
            'modeOfDeliveries' => ModeOfDelivery::paginate(),
        ]);
    }
}
