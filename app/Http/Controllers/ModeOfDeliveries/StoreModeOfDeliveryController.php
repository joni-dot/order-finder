<?php

namespace App\Http\Controllers\ModeOfDeliveries;

use App\Http\Controllers\Controller;
use App\ModeOfDelivery;
use App\Http\Requests\SaveModeOfDeliveryRequest;

class StoreModeOfDeliveryController extends Controller
{
    /**
     * Store mode of delivery.
     *
     * @return View
     */
    public function __invoke(SaveModeOfDeliveryRequest $request)
    {
        ModeOfDelivery::create($request->validated());

        return redirect('mode-of-deliveries');
    }
}