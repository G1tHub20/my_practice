<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>PDF出力</title>
    </head>
    <style>
        /* dompdf日本語文字化け対策 */
        /* 基本の文字 */
        @font-face {
            font-family: ipaexg;
            font-style: normal;
            font-weight: normal;
            src: url('{{ storage_path('fonts/ipaexg.ttf') }}');
        }
        /* 全てのHTML要素に適用 */
        html, body, textarea {
            font-family: ipaexg, sans-serif;
        }
    </style>
    <body>
        ここに中身を記述する
    </body>
</html>
