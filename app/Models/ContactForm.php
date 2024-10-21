<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    use HasFactory;

    protected $fillable = [ //モデルで直接保存できるフィールドを制限
        'name',
        'title',
        'email',
        'url',
        'gender',
        'age',
        'contact',
    ];

    /* ローカルスコープ */
    public function scopeSearch($query, $search) // 先頭に「scope」。第一引数は$quey、第二引数は渡ってくる値
    {
        if($search !== null) {
            $search_split = mb_convert_kana($search, 's'); //全角スペースを半角に変換
            $search_split2 = preg_split('/[\s]+/', $search_split); //正規表現で文字列を分割して配列を返す
            foreach($search_split2 as $value) {
                // $query->where('name', 'like', '%'.$value.'%');
                $query->orwhere('name', 'like', '%'.$value.'%')
                      ->orwhere('title', 'like', '%'.$value.'%');
            }
            return $query;
        }
    }

}
