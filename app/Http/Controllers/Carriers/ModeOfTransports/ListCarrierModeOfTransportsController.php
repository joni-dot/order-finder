<?php

namespace App\Http\Controllers\Carriers\ModeOfTransports;

use App\Http\Controllers\Controller;
use App\Models\Carrier;

class ListCarrierModeOfTransportsController extends Controller
{
    /**
     * List carrier mode of transports.
     *
     * @return View
     */
    public function __invoke(Carrier $carrier)
    {
        return view('carriers.mode-of-transports.index', [
            'carrier' => $carrier,
            'carrierModeOfTransports' => $carrier->modeOfTransports()
                ->select([
                    'id',
                    'name',
                    'carrier_id',
                ])
                ->paginate(),
            'hiddenColumns' => ['carrier_id'],
        ]);
    }
}
