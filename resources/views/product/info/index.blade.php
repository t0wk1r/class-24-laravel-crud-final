<html>
  <head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <style>
      body {
        font-family: 'Playfair Display', serif;
        font-size: 24px;
      }
      a{
        text-decoration: none;
      }
    </style>
  </head>
  <body>
    
    <h1>this is output</h1>

<table border="1" align="center">
    <tr>
        <th>Product Name</th>
        <th>Description</th>
        <!-- <th>Price</th> -->
        <th>Action</th>
    </tr>
    @foreach($allData as $data)
    <tr>
    <td>{{$data['productname']}}</td>
    <td>{{$data['description']}}</td>
    <!-- <td>{{$data['price']}}</td> -->
    <td>
        <a href="{{route('product_infos.show', $data->id)}}">Show</a> ||
        <a href="{{route('product_infos.edit', $data->id)}}">Edit</a> ||
        <form style="display: inline-block;" action="{{route('product_infos.destroy', $data->id)}}" method="post">
          @csrf
          @method('delete')
          <button onclick="return confirm('Are You Sure To Delete This Data')">Delete</button> 
        </form>
       
    </td>
    </tr>
    @endforeach
</table>
<button><a href="{{url('/create')}}">Create</a></button>
  </body>
</html>







