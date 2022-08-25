<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
    </style>
</head>
<body>
    
<h1>This Is Form Page</h1>
<form action="{{route('product_infos.store')}}" method="post">
    @csrf
    <input type="text" name="pname"><br>
    <input type="text" name="pdes"><br>
    <input type="number" min="100" max="999" name="pprise"><br>
    <input type="submit" >
</form>
<br><br><br><br>
<button><a href="{{url('/info')}}">All Data</a></button>
</body>
</html>


