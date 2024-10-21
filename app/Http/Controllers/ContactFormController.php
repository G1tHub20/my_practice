<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View; //戻り値型を指定するために必要
use Illuminate\Http\RedirectResponse; //戻り値型を指定するために必要
use App\Http\Requests\StoreContractRequest;
use App\Models\ContactForm;

class ContactFormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View //Laravel10では戻り値型を指定
    {
        // // $values = ContactForm::all();
        // $values = ContactForm::select('id', 'name', 'title', 'created_at') //取得する列を指定
        // // ->get();
        // ->paginate(10); //ページネーション対応

        /* 検索対応 */
        $search = $request->search;
        $query = contactForm::search($search); // クエリのローカルスコープを呼び出す
        $values = $query->select('id', 'name', 'title', 'created_at') //取得する列を指定
        ->paginate(10); //ページネーション対応

        return view('contacts.index', compact('values'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request): RedirectResponse
    // 引数にフォームリクエストクラスを指定
    public function store(StoreContractRequest $request): RedirectResponse
    {
        // dd($request, $request->name);

        ContactForm::create([
            'name' => $request->name,
            'title' => $request->title,
            'email' => $request->email,
            'url' => $request->url,
            'gender' => $request->gender,
            'age' => $request->age,
            'contact' => $request->contact,
        ]);

        // return redirect('contacts/index');
        return to_route('contacts.index'); //ルート名でリダイレクト
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $value = ContactForm::find($id); //主キーで1件だけ取得

        if($value->gender === 0) {
            $value->gender = '男性';
        } else {
            $value->gender = '女性';
        }

        if($value->age === 1) { $value->age = '～19歳'; }
        if($value->age === 2) { $value->age = '20～29歳'; }
        if($value->age === 3) { $value->age = '30～39歳'; }
        if($value->age === 4) { $value->age = '40～49歳'; }
        if($value->age === 5) { $value->age = '50～59歳'; }
        if($value->age === 6) { $value->age = '60歳～'; }

        return view('contacts.show', compact('value'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $value = ContactForm::find($id);
        return view('contacts.edit', compact('value'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $value = ContactForm::find($id);
        $value->name = $request->name;
        $value->title = $request->title;
        $value->email = $request->email;
        $value->url = $request->url;
        $value->gender = $request->gender;
        $value->age = $request->age;
        $value->contact = $request->contact;
        $value->save(); //保存

        return to_route('contacts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        $value = ContactForm::find($id);
        $value->delete();

        return to_route('contacts.index');
    }
}
