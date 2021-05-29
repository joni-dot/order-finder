<?php

namespace App\Http\Controllers\Carriers;

use App\Http\Controllers\Controller;
use App\Http\Requests\SaveCarrierRequest;
use App\Models\Carrier;

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

        return redirect->route('dashboard.carriers.index');
    }
}
