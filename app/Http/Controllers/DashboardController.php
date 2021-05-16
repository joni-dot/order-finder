<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * Show dashboard index.
     *
     * @return View
     */
    public function __invoke()
    {
        return view('dashboard');
    }
}
