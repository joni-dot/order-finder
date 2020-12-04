<?php

namespace App\Http\Controllers\Vendors;

use App\Http\Controllers\Controller;
use App\Vendor;
use App\Http\Requests\SaveVendorRequest;

class UpdateVendorController extends Controller
{
    /**
     * Update vendor.
     *
     * @return View
     */
    public function __invoke(Vendor $vendor, SaveVendorRequest $request)
    {
        $vendor->update($request->validated());

        return redirect('vendors');
    }
}