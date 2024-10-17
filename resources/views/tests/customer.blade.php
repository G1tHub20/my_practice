<p>これはビューです</p>
@foreach($values as $value)
  id：{{ $value->id }} <br>
  name：{{ $value->name }} <br>
@endforeach