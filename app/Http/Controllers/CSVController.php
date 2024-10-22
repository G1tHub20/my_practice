<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Storage;
use App\Models\ContactForm;
use Goodby\CSV\Import\Standard\Lexer;
use Goodby\CSV\Import\Standard\Interpreter;
use Goodby\CSV\Import\Standard\LexerConfig;

class CSVController extends Controller
{
    public function index()
    {
        return view('myTest/csv');
    }

    public function uploadCsv(Request $request)
    {
        $lexer = new Lexer(new LexerConfig());

        /* CSVファイル保存 */
        $baseName = $request->file('csv')->guessExtension(); // 元ファイル名（拡張子なし）
        $directory = public_path() . "/csv/tmp"; //保存先ディレクトリ

        $suffix = '_' . date('YmdHis'); // _YYYYMMDDhhmmss（現在日時）

        $newName = $directory . '/' . $baseName . $suffix . '.csv'; // 新規ファイル名
        $request->file('csv')->move($directory, $newName); //ファイルを保存（直接公開する場合）

        // dd("ファイル保存" . $newName);


        /* Goodby CSVのconfig設定 */
        $config = new LexerConfig();
        $interpreter = new Interpreter();
        $lexer = new Lexer($config);
    
        /* CharsetをUTF-8に変換、CSVのヘッダー行を無視 */
        $config->setToCharset("UTF-8");
        // $config->setFromCharset("sjis-win");
        $config->setFromCharset("UTF-8");
        $config->setIgnoreHeaderLine(true);
    
        $dataList = [];
        /* 新規Observerとして、$dataList配列に値を代入 */
        $interpreter->addObserver(function (array $row) use (&$dataList){
            // 各列のデータを取得
            $dataList[] = $row;
        });

        /* CSVデータをパース */
        $tmpPath = $newName;
        $lexer->parse($tmpPath, $interpreter);

        // 登録処理
        $count = 0;
        foreach($dataList as $row) {
            ContactForm::insert(['name' => $row[0], 'title' => $row[1], 'email' => $row[2], 'url' => $row[3], 'gender' => $row[4], 'age' => $row[5], 'contact' => $row[6]]);
            $count++;
        }

        // $message = '';
        // $message = '登録完了しました';
        return redirect()->route('uploadCsv')->with('flash_message', '登録完了しました');


    }


}
