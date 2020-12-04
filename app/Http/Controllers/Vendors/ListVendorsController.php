<?php

namespace App\Http\Controllers\Vendors;

use App\Http\Controllers\Controller;
use App\Vendor;

class ListVendorsController extends Controller
{
    /**
     * List vendor.
     *
     * @return View
     */
    public function __invoke()
    {
        return view('vendors.index', [
            'vendors' => Vendor::paginate(),
        ]);
    }
}