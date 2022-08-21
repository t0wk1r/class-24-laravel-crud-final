<h1>This Is Edit Page</h1>
<form action="{{route('product_infos.update', $productInfo->id)}}" method="post">
    @csrf
    @method('put')
    <input type="text" value="{{$productInfo['productname']}}" name="pname"><br>
    <input type="text" value="{{$productInfo['description']}}" name="pdes"><br>
    <input type="text" value="{{$productInfo['price']}}" name="pprise"><br>
    <input type="submit" value="Update">
</form>

<button><a href="{{url('/info')}}">Back</a></button>

