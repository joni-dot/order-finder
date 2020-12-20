<?php

namespace App\Http\Controllers\Carriers;

use App\Carrier;
use App\Http\Controllers\Controller;

class ShowCarrierCreationFormController extends Controller
{
    /**
     * Create carrier.
     *
     * @return View
     */
    public function __invoke()
    {
        return view('carriers.create', [
            'carrier' => new Carrier,
        ]);
    }
}
