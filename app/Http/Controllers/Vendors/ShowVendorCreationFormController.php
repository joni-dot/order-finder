<?php

namespace App\Http\Controllers\Vendors;

use App\Http\Controllers\Controller;
use App\Vendor;

class ShowVendorCreationFormController extends Controller
{
    /**
     * Create vendor.
     *
     * @return View
     */
    public function __invoke()
    {
        return view('vendors.create', [
            'vendor' => new Vendor,
        ]);
    }
}