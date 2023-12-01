<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>



<div class="container">

 <a class="btn btn-success" href="{{URL::to('/add_product_page')}}" style="margin-top:30px">Add Product</a>

  <h2>All Product</h2>
          
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>id</th>
        <th>Name</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>

  @foreach($getallproduct as $v_show)
      <tr>
        <td>{{$v_show->id}}</td>
        <td>{{$v_show->name}}</td>
        <td>{{$v_show->quantity}}</td>
         <td>{{$v_show->price}} TK</td>
        <td>


 <a class="btn btn-success btn-sm" style=""  href="{{URL::to('/view_product_page/'.$v_show->id)}}"><i class="fa fa-eye" aria-hidden="true"></i></a>

  <a class="btn btn-warning btn-sm" style=""  href="{{URL::to('/edit_product_page/'.$v_show->id)}}"><i class="fa fa-edit" aria-hidden="true"></i></a>


  <a class="btn btn-danger btn-sm" style=""  href="{{URL::to('/product_delete/'.$v_show->id)}}"><i class="fa fa-trash" aria-hidden="true"></i></a>





        </td>
      </tr>

      @endforeach
  
    </tbody>
  </table>
</div>

</body>
</html>