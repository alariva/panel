<?php

namespace App\Http\Controllers\Frontoffice;

use App\CAP\Widgets\LinkWidget;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function show()
    {
        $linkWidget = new LinkWidget(auth()->id());

        $widgets = $linkWidget->widgets();

        return view('frontoffice.dashboard.show', compact('widgets'));
    }
}
