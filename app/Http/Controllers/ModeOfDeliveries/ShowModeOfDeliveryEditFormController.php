<?php

namespace App\Http\Controllers\ModeOfDeliveries;

use App\Http\Controllers\Controller;
use App\Models\ModeOfDelivery;

class ShowModeOfDeliveryEditFormController extends Controller
{
    /**
     * Edit carrier.
     *
     * @return View
     */
    public function __invoke(ModeOfDelivery $modeOfDelivery)
    {
        return view('mode-of-deliveries.edit', [
            'modeOfDelivery' => $modeOfDelivery,
        ]);
    }
}
