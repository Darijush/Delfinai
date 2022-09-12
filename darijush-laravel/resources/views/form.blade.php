


@if(Session::has('res'))
<h2>{{Session::get('res')}}</h2>
@endif
<form action="{{route('calculate')}}" method="POST">
X: <input type="text" name="x"><br/><br/>
Y: <input type="text" name="y"><br/><br/>
@csrf
<button type="submit">SUM</button>
</form>

