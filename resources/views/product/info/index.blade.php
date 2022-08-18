
<h1>this is output</h1>

<table border="1" align="center">
    <tr>
        <th>Product Name</th>
        <th>Description</th>
        <th>Price</th>
    </tr>
    @foreach($allData as $data)
    <tr>
    <td>{{$data['productname']}}</td>
    <td>{{$data['description']}}</td>
    <td>{{$data['price']}}</td>
    </tr>
    @endforeach
</table>