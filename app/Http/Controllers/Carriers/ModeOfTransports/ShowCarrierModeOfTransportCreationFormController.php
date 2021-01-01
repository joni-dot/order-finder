<?php

namespace App\Http\Controllers\Carriers\ModeOfTransports;

use App\Http\Controllers\Controller;
use App\Models\Carrier;

class ShowCarrierModeOfTransportCreationFormController extends Controller
{
    /**
     * Show carrier mofe of transport creation form.
     *
     * @return View
     */
    public function __invoke(Carrier $carrier)
    {
        return view('carriers.mode-of-transports.create', [
            'carrier' => $carrier,
        ]);
    }
}
