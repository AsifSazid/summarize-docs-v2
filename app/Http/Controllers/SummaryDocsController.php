<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SummaryDocsController extends Controller
{
    public function index(){
        return view('frontend.summary');
    }

    public function getExtractedText()
    {
        $extracted_text = session('extracted_text');

        return response()->json(['extracted_text' => $extracted_text]);
    }

    public function storeExtractedText(Request $request)
    {
        // Validate the request data
        $request->validate([
            'extracted_text' => 'required|string',
        ]);

        // Store the extracted text in the session
        session(['extracted_text' => $request->input('extracted_text')]);

        return response()->json(['success' => true]);
    }
}
