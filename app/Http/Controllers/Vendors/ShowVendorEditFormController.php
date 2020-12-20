<?php

namespace App\Http\Controllers\Vendors;

use App\Http\Controllers\Controller;
use App\Models\Vendor;

class ShowVendorEditFormController extends Controller
{
    /**
     * Edit vendor.
     *
     * @return View
     */
    public function __invoke(Vendor $vendor)
    {
        return view('vendors.edit', [
            'vendor' => $vendor,
        ]);
    }
}
