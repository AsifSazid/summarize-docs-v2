<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mpdf\Mpdf;

class SummaryDocsController extends Controller
{
    public function index(){
        return view('frontend.pdf-summary.summary');
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

    public function pdfDownload(Request $request){
        $conversationData = json_decode($request->input('conversation'), true);
        $title = $conversationData['title'];
        // foreach ($conversationData['messages'] as $message) {
        //     if($message['sender'] == 'bot'){
        //         $msg_text = $this->textFormation($message['text']);
        //     }else{
        //         continue;
        //     }
        //     $message['text'] = $msg_text;
        // }

        $messages = $conversationData['messages'];
        // dd($messages);



        if ($conversationData) {
            $preview = view('frontend.pdf-summary.summary-pdf', compact('title', 'messages'));
            $generatedTime = date('d M Y H:i:s A');
            $mpdf = new \Mpdf\Mpdf();
            $mpdf->autoScriptToLang = true;
            $mpdf->autoLangToFont   = true;
            $mpdf->WriteHTML($preview);
            $mpdf->Output($generatedTime . '-' . ".pdf", "I");
        } else {
            return response()->json(['error' => 'No conversation data provided'], 400);
        }
    }

    public function textFormation($responseText)
    {
        // Bold text: **text** -> <strong>text</strong>
        $responseText = preg_replace('/\*\*(.*?)\*\*/', '<strong>$1</strong>', $responseText);

        // Headings: ## text -> <h4>text</h4>
        $responseText = preg_replace('/## (.*?)\n/', '<h4>$1</h4>', $responseText);

        // Bullet points: - text -> <li>text</li>
        $responseText = preg_replace('/^- (.*)/m', '<li>$1</li>', $responseText);

        // Newline characters: \n -> <br>
        $responseText = str_replace("\n", '<br>', $responseText);

        return $responseText;
    }

}
