<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use League\CommonMark\Converter;

class TermsAndConditionsController extends Controller
{
    protected $converter;

    public function __construct(Converter $converter)
    {
        $this->converter = $converter;
    }

    public function show()
    {
        $filename = 'terms-and-conditions.md';

        $raw = Storage::get($filename);

        $updated = date('Y-m-d', Storage::lastModified($filename));

        $body = $this->converter->convertToHtml($raw);

        return view('frontoffice.terms-and-conditions.show', compact('body', 'updated'));
    }

    public function edit()
    {
        $filename = 'terms-and-conditions.md';

        $body = Storage::get($filename);

        $updated = date('Y-m-d', Storage::lastModified($filename));

        return view('backoffice.terms-and-conditions.edit', compact('body', 'updated'));
    }

    public function update(Request $request)
    {
        $filename = 'terms-and-conditions.md';

        $body = Storage::put($filename, $request->get('body'));

        return redirect()->route('backoffice.terms-and-conditions.show');
    }
}
