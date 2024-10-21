<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class ContactFormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contact_forms')->insert(array(
            0 => 
            array (
                'name' => '宮沢 くみ子',
                'title' => '住所変更の手続き方法を教えてください。',
                'email' => 'sato.hiroshi@kijima.org',
                'url' => 'http://sample.com',
                'gender' => 0,
                'age' => 4,
                'contact' => 'いてみると、そのすぐに立って行くの少し肩かたまを両方りょういたのだろうかんしつにあたしはよかったり笑わらい。',
                'created_at' => new DateTime(), //現在日時
            ),
            1 => 
            array (
                'name' => '吉田 七夏',
                'title' => '料金の確認方法',
                'email' => 'yasuhiro44@hirokawa.org',
                'url' => 'http://kobayashi.com/optio-odio-facere-aut-voluptas-dolores.html',
                'gender' => 0,
                'age' => 5,
                'contact' => 'けびました。みんなかったりしました。思わず叫さけん命めい勢いきはゆらゆるや雁がんで、あすこの上に飛とび出した。',
                'created_at' => new DateTime(),
            ),
            2 => 
            array (
                'name' => '山崎 大助',
                'title' => '開発入門',
                'email' => '1@mail.com',
                'url' => 'http://sample1.com',
                'gender' => 1,
                'age' => 2,
                'contact' => 'いてみると、そのすぐに立って行くの少し肩かたまを両方りょういたのだろうかんしつにあたしはよかったり笑わらい。',
                'created_at' => new DateTime(), //現在日時
            ),
            3 => 
            array (
                'name' => '田中 太郎',
                'title' => '確認方法',
                'email' => '1@mail.com',
                'url' => 'http://sample2.com',
                'gender' => 0,
                'age' => 3,
                'contact' => 'けびました。みんなかったりしました。思わず叫さけん命めい勢いきはゆらゆるや雁がんで、あすこの上に飛とび出した。',
                'created_at' => new DateTime(),
            ),
            4 => 
            array (
                'name' => '吉田 七夏',
                'title' => '料金の確認方法',
                'email' => 'yasuhiro44@hirokawa.org',
                'url' => 'http://kobayashi.com/optio-odio-facere-aut-voluptas-dolores.html',
                'gender' => 0,
                'age' => 5,
                'contact' => 'けびました。みんなかったりしました。思わず叫さけん命めい勢いきはゆらゆるや雁がんで、あすこの上に飛とび出した。',
                'created_at' => new DateTime(),
            ),
            5 => 
            array (
                'name' => '山崎 大助',
                'title' => '開発入門',
                'email' => '1@mail.com',
                'url' => 'http://sample1.com',
                'gender' => 1,
                'age' => 2,
                'contact' => 'いてみると、そのすぐに立って行くの少し肩かたまを両方りょういたのだろうかんしつにあたしはよかったり笑わらい。',
                'created_at' => new DateTime(), //現在日時
            ),
            6 => 
            array (
                'name' => '田中 太郎',
                'title' => '確認方法',
                'email' => '1@mail.com',
                'url' => 'http://sample2.com',
                'gender' => 0,
                'age' => 3,
                'contact' => 'けびました。みんなかったりしました。思わず叫さけん命めい勢いきはゆらゆるや雁がんで、あすこの上に飛とび出した。',
                'created_at' => new DateTime(),
            ),
            7 => 
            array (
                'name' => '吉田 七夏',
                'title' => '料金の確認方法',
                'email' => 'yasuhiro44@hirokawa.org',
                'url' => 'http://kobayashi.com/optio-odio-facere-aut-voluptas-dolores.html',
                'gender' => 0,
                'age' => 5,
                'contact' => 'けびました。みんなかったりしました。思わず叫さけん命めい勢いきはゆらゆるや雁がんで、あすこの上に飛とび出した。',
                'created_at' => new DateTime(),
            ),
            8 => 
            array (
                'name' => '山崎 大助',
                'title' => '開発入門',
                'email' => '1@mail.com',
                'url' => 'http://sample1.com',
                'gender' => 1,
                'age' => 2,
                'contact' => 'いてみると、そのすぐに立って行くの少し肩かたまを両方りょういたのだろうかんしつにあたしはよかったり笑わらい。',
                'created_at' => new DateTime(), //現在日時
            ),
            9 => 
            array (
                'name' => '田中 太郎',
                'title' => '確認方法',
                'email' => '1@mail.com',
                'url' => 'http://sample2.com',
                'gender' => 0,
                'age' => 3,
                'contact' => 'けびました。みんなかったりしました。思わず叫さけん命めい勢いきはゆらゆるや雁がんで、あすこの上に飛とび出した。',
                'created_at' => new DateTime(),
            ),
            10 => 
            array (
                'name' => '吉田 七夏',
                'title' => '料金の確認方法',
                'email' => 'yasuhiro44@hirokawa.org',
                'url' => 'http://kobayashi.com/optio-odio-facere-aut-voluptas-dolores.html',
                'gender' => 0,
                'age' => 5,
                'contact' => 'けびました。みんなかったりしました。思わず叫さけん命めい勢いきはゆらゆるや雁がんで、あすこの上に飛とび出した。',
                'created_at' => new DateTime(),
            ),
            11 => 
            array (
                'name' => '山崎 大助',
                'title' => '開発入門',
                'email' => '11@mail.com',
                'url' => 'http://sample1.com',
                'gender' => 1,
                'age' => 2,
                'contact' => 'いてみると、そのすぐに立って行くの少し肩かたまを両方りょういたのだろうかんしつにあたしはよかったり笑わらい。',
                'created_at' => new DateTime(), //現在日時
            ),
            12 => 
            array (
                'name' => '田中 太郎',
                'title' => '確認方法',
                'email' => '12@mail.com',
                'url' => 'http://sample2.com',
                'gender' => 0,
                'age' => 3,
                'contact' => 'けびました。みんなかったりしました。思わず叫さけん命めい勢いきはゆらゆるや雁がんで、あすこの上に飛とび出した。',
                'created_at' => new DateTime(),
            ),
        ));
    }
}
