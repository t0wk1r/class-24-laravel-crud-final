
<h1>this is output</h1>

<table border="1" align="center">
    <tr>
        <th>Product Name</th>
        <th>Description</th>
        <th>Price</th>
    </tr>
    
    <tr>
    <td>{{$productInfo['productname']}}</td>
    <td>{{$productInfo['description']}}</td>
    <td>{{$productInfo['price']}}</td>
    
    
</table>
<button><a href="{{url('/info')}}">Back</a></button>
