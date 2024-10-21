<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            編集画面
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form method="post" action="{{ route('contacts.update', ['id'=> $value->id]) }}">
                    @csrf
                <div class="p-6 text-gray-900">
                    <div class="lg:w-1/2 md:w-2/3 mx-auto">
                    <div class="flex flex-wrap -m-2">
                        <div class="p-2 w-full">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-600">氏名</label>
                                <input type="text" id="name" name="name" value="{{ $value->name }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                            <div class="relative">
                                <label for="title" class="leading-7 text-sm text-gray-600">件名</label>
                                <input type="text" id="title" name="title" value="{{ $value->title }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                            <div class="relative">
                                <label for="email" class="leading-7 text-sm text-gray-600">メールアドレス</label>
                                <input type="email" id="email" name="email" value="{{ $value->email }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                            <div class="relative">
                                <label for="url" class="leading-7 text-sm text-gray-600">ホームページ</label>
                                <input type="url" id="url" name="url" value="{{ $value->url }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                            <div class="relative">
                                <label class="leading-7 text-sm text-gray-600">性別</label><br>
                                <input type="checkbox" name="gender" value="0" @if($value->gender === 0) checked @endif class="">男性
                                <input type="checkbox" name="gender" value="1" @if($value->gender === 1) checked @endif class="">女性
                            </div>
                            <div class="relative">
                                <label for="age" class="leading-7 text-sm text-gray-600">年齢</label>
                                <select name="age" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                    <option value="">選択してください</option>
                                    <option value="1" @if($value->age === 1) selected @endif>～19歳</option>
                                    <option value="2" @if($value->age === 2) selected @endif>20～29歳</option>
                                    <option value="3" @if($value->age === 3) selected @endif>30～39歳</option>
                                    <option value="4" @if($value->age === 4) selected @endif>40～49歳</option>
                                    <option value="5" @if($value->age === 5) selected @endif>50～59歳</option>
                                    <option value="6" @if($value->age === 6) selected @endif>60歳～</option>
                                </select>
                            </div>
                        </div>
                        <div class="p-2 w-full">
                        <div class="relative">
                            <label for="contact" class="leading-7 text-sm text-gray-600">お問い合わせ内容</label>
                            <textarea id="contact" name="contact" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out">{{ $value->contact }}</textarea>
                        </div>
                        </div>
                        <div class="p-2 w-full">
                        <button class="inline-block flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">更新する</button>
                    </div>
                </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
