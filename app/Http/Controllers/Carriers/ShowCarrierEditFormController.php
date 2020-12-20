<?php

namespace App\Http\Controllers\Carriers;

use App\Http\Controllers\Controller;
use App\Models\Carrier;

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
