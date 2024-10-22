<h1>CSV一括登録</h1>
@if (session('flash_message'))
    <div class="">
        {{ session('flash_message') }}
    </div>
@endif
<form method="post" action="" enctype="multipart/form-data">
    @csrf
    <input type="file" name="csv"/><br>
    <input type="submit" value="アップロード">
</form>
