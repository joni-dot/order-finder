<?php

namespace App\Http\Controllers\Vendors;

use App\Http\Controllers\Controller;
use App\Http\Requests\SaveVendorRequest;
use App\Models\Vendor;

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
