<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>詳細画面 PDF</title>
    <style>
        @font-face {
            font-family: 'ipaexg';
            font-style: normal;
            font-weight: normal;
            /* src: url('{{ storage_path('fonts/ipaexg.ttf') }}'); */
            src: url('{{ storage_path('fonts/ipaexg.ttf') }}') format('truetype');
        }
        html, body {
            font-family: 'ipaexg', sans-serif;
            margin: 0;
            padding: 10px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
        }
        .field {
            margin-bottom: 10px;
        }
        h1 {
            font-family: 'ipaexg', sans-serif;
            font-weight: normal; /* 太字だと崩れるため明示的に指定 */
        }
        .label {
            font-weight: bold;
            font-family: 'ipaexg', sans-serif;
        }
        .value {
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>詳細画面</h1>
        <div class="field">
            <span>氏名:</span>
            <span class="value">{{ $value->name }}</span>
        </div>
        <div class="field">
            <span>件名:</span>
            <span class="value">{{ $value->title }}</span>
        </div>
        <div class="field">
            <span>メールアドレス:</span>
            <span class="value">{{ $value->email }}</span>
        </div>
        <div class="field">
            <span>ホームページ:</span>
            <span class="value">{{ $value->url }}</span>
        </div>
        <div class="field">
            <span>性別:</span>
            <span class="value">{{ $value->gender }}</span>
        </div>
        <div class="field">
            <span>年齢:</span>
            <span class="value">{{ $value->age }}</span>
        </div>
        <div class="field">
            <span>お問い合わせ内容:</span>
            <div class="value">{{ $value->contact }}</div>
        </div>
    </div>
</body>
</html>
