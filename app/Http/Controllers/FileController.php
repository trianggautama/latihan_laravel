<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\PdfToText\Pdf;


class FileController extends Controller
{
    public function store(Request $request)
    {

        $text = Pdf::getText($request->file('file'));

        return view('pdf_to_text', compact('text'));
    }
}
