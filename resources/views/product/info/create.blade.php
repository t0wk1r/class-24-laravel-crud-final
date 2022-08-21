<h1>This Is Form Page</h1>
<form action="{{route('product_infos.store')}}" method="post">
    @csrf
    <input type="text" name="pname"><br>
    <input type="text" name="pdes"><br>
    <input type="text" name="pprise"><br>
    <input type="submit" >
</form>

<button><a href="{{url('/info')}}">All Data</a></button>