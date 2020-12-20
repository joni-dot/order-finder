<?php

namespace App\Http\Controllers\Carriers;

use App\Carrier;
use App\Http\Controllers\Controller;
use App\Http\Requests\SaveCarrierRequest;

class StoreCarrierController extends Controller
{
    /**
     * Store carrier.
     *
     * @return View
     */
    public function __invoke(SaveCarrierRequest $request)
    {
        Carrier::create($request->validated());

        return redirect('carriers');
    }
}
