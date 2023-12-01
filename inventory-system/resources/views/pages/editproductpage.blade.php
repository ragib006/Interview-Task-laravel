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
  <h3>Edit Product</h3>


  <form class="form-horizontal" action="{{URL::to('/product_edit_form_action/'.$product->id)}}" method="post" enctype="multipart/form-data" style="margin-top:20px">
                    {{ csrf_field() }}

    <div class="form-group">
      <label for="email">Product Name:</label>
      <input type="text" class="form-control"  name="name" style="width:500px"placeholder="Enter Product Name"  value="{{$product->name}}" required>
    </div>
    <div class="form-group">
      <label for="pwd">Product Quantity:</label>
      <input type="number" class="form-control"  placeholder="Enter Product Quantity" style="width:500px"  name="quantity" value="{{$product->quantity}}"required>
    </div>

    <div class="form-group">
      <label for="pwd">Product Price:</label>
      <input type="number" class="form-control"  value="{{$product->price}}" placeholder="Enter Product Price" style="width:500px"  name="price" required>
    </div>



    <button type="submit" class="btn btn-default">Update</button>
  </form>
</div>

</body>
</html>
