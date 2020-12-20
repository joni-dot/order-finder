<?php

namespace App\Http\Controllers\ModeOfDeliveries;

use App\Http\Controllers\Controller;
use App\ModeOfDelivery;

class ShowModeOfDeliveryCreationFormController extends Controller
{
    /**
     * Create mode of delivery.
     *
     * @return View
     */
    public function __invoke()
    {
        return view('mode-of-deliveries.create', [
            'modeOfDelivery' => new ModeOfDelivery,
        ]);
    }
}
