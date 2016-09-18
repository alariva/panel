<?php

namespace App\Http\Controllers\Frontoffice;

use App\CAP\Widgets\LinkWidget;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function show()
    {
        $w = new LinkWidget(auth()->id());

        $w->load();

        $widgets = $w->widgets();

        return view('frontoffice.dashboard.show', compact('widgets'));
    }
}
