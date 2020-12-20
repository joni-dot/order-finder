<?php

namespace App\Http\Controllers\Carriers;

use App\Carrier;
use App\Http\Controllers\Controller;

class ShowCarrierEditFormController extends Controller
{
    /**
     * Edit carrier.
     *
     * @return View
     */
    public function __invoke(Carrier $carrier)
    {
        return view('carriers.edit', [
            'carrier' => $carrier,
        ]);
    }
}
