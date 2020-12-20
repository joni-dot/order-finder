<?php

namespace App\Http\Controllers\ModeOfDeliveries;

use App\Http\Controllers\Controller;
use App\Http\Requests\SaveModeOfDeliveryRequest;
use App\ModeOfDelivery;

class UpdateModeOfDeliveryController extends Controller
{
    /**
     * Update mode of delivery.
     *
     * @return View
     */
    public function __invoke(ModeOfDelivery $modeOfDelivery, SaveModeOfDeliveryRequest $request)
    {
        $modeOfDelivery->update($request->validated());

        return redirect('mode-of-deliveries');
    }
}
