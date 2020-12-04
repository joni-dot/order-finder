<?php

namespace App\Http\Controllers\Carriers;

use App\Http\Controllers\Controller;
use App\Http\Requests\SaveCarrierRequest;
use App\Carrier;

class UpdateCarrierController extends Controller
{
    /**
     * Update carrier.
     *
     * @return View
     */
    public function __invoke(Carrier $carrier, SaveCarrierRequest $request)
    {
        $carrier->update($request->validated());

        return redirect('carriers');
    }
}