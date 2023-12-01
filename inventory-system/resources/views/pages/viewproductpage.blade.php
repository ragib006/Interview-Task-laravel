<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h3>Product Details</h3>

  <div class="info">

    <p><span style="font-weight: bold,font-size:20px">Product Id : </span><span style="margin-left:10px">{{$product->id}}</span></p>

       <p><span style="font-weight: bold,font-size:20px">Product Name : </span><span style="margin-left:10px">{{$product->name}}</span></p>

        <p><span style="font-weight: bold,font-size:20px">Product Quantity : </span><span style="margin-left:10px">{{$product->quantity}}</span></p>

         <p><span style="font-weight: bold,font-size:20px">Product Price : </span><span style="margin-left:10px">{{$product->price}} TK</span></p>

  </div>



    </div>



</div>

</body>
</html>
