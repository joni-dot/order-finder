<?php

namespace App\Http\Controllers\Vendors;

use App\Http\Controllers\Controller;
use App\Vendor;
use App\Http\Requests\SaveVendorRequest;

class StoreVendorController extends Controller
{
    /**
     * Store vendors.
     *
     * @return View
     */
    public function __invoke(SaveVendorRequest $request)
    {
        Vendor::create($request->validated());

        return redirect('vendors');
    }
}