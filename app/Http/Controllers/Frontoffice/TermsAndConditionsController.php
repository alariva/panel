<?php

namespace App\Http\Controllers\Frontoffice;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use League\CommonMark\Converter;

class TermsAndConditionsController extends Controller
{
    protected $converter;

    public function __construct(Converter $converter)
    {
        $this->converter = $converter;
    }

    public function index()
    {
        $filename = 'terms-and-conditions.md';

        $raw = Storage::get($filename);
        
        $updated = date('Y-m-d', Storage::lastModified($filename));

        $body = $this->converter->convertToHtml($raw);

        return view('frontoffice.terms-and-conditions.index', compact('body', 'updated'));
    }
}
