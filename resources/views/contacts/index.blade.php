<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            お問い合わせ一覧
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                  <a href="{{ route('contacts.create') }} " class="text-blue-500">新規登録</a><br>
          <form class="mb-8" method="GET" action="{{ route('contacts.index') }}">
            <input type="text" name="search" placeholder="検索">
            <button class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">検索する</button>
          </form>
                  <div class="lg:w-2/3 w-full mx-auto overflow-auto">
                    <table class="table-auto w-full text-left whitespace-no-wrap">
                      <thead>
                        <tr>
                          <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">ID</th>
                          <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">氏名</th>
                          <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">件名</th>
                          <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">登録日</th>
                          <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">詳細</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($values as $value)
                          <tr>
                            <td>{{ $value->id }}</td>
                            <td>{{ $value->name }}</td>
                            <td>{{ $value->title }}</td>
                            <td>{{ $value->created_at }}</td>
                            <td class="text-blue-500"><a href="{{ route('contacts.show', ['id' => $value->id]) }}">詳細を見る</a></td> <!-- routeの第2引数でパラメータ（配列）を渡す -->
                          </tr>
                        @endforeach
                        </tbody>
                    </table>
                  </div>
                  {{ $values->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
