<?php

namespace App\Http\Controllers\Vendors;

use App\Http\Controllers\Controller;
use App\Http\Requests\SaveVendorRequest;
use App\Models\Vendor;

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
