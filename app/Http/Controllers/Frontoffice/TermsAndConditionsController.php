<?php

namespace App\Http\Controllers\Frontoffice;

use App\Http\Controllers\Controller;

class TermsAndConditionsController extends Controller
{
    public function index()
    {
        return view('frontoffice.terms-and-conditions.index');
    }
}
