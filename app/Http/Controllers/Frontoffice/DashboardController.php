<?php

namespace App\Http\Controllers\Frontoffice;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function show()
    {
        return view('frontoffice.dashboard.show');
    }
}
