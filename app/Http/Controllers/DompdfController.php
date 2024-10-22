<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf; // 追記
use Illuminate\Http\Request;
use App\Models\ContactForm;

class DompdfController extends Controller
{
    // public function generatePDF($id)
    public function generatePDF(Request $request)
    {

        // $pdf = PDF::loadView('myTest.pdf'); //PDF出力したいビュー
        // return $pdf->download('PDFダウンロード.pdf'); //PDFファイル名

        $id = $request->id;
        $value = ContactForm::findOrFail($id);  // 指定IDのデータを取得

        $pdf = PDF::loadView('contacts.pdf', compact('value'));  // PDF用ビューを読み込む
        return $pdf->download('contact_' . $id . '.pdf');  // PDFをダウンロード
    }
}
