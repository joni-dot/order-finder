<?php

namespace App\Http\Controllers\Carriers\ModeOfTransports;

use App\Http\Controllers\Controller;
use App\Models\Carrier;
use App\Models\ModeOfTransport;

class ShowCarrierModeOfTransportEditFormController extends Controller
{
    /**
     * Show carrier mofe of transport edit form.
     *
     * @return View
     */
    public function __invoke(Carrier $carrier, ModeOfTransport $modeOfTransport)
    {
        return view('carriers.mode-of-transports.edit', [
            'carrier' => $carrier,
            'modeOfTransport' => $modeOfTransport,
        ]);
    }
}
