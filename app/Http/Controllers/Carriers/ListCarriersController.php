<?php

namespace App\Http\Controllers\Carriers;

use App\Carrier;
use App\Http\Controllers\Controller;

class ListCarriersController extends Controller
{
    /**
     * List carriers.
     *
     * @return View
     */
    public function __invoke()
    {
        return view('carriers.index', [
            'carriers' => Carrier::select([
                'id',
                'name',
            ])
                ->paginate(),
        ]);
    }
}
