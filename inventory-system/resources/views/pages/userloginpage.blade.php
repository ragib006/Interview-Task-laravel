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



<div class="fromsection" style="width:700px;margin:20px auto">

    <h3>User Login</h3>
  <form class="form-horizontal" action="{{url('/user_login_from_action')}}" method="post" enctype="multipart/form-data" style="margin-top:20px">
                    {{ csrf_field() }}

 
    <div class="form-group">
      <label for="pwd">User Email:</label>
      <input type="email" class="form-control"  placeholder="Enter User Email" style="width:500px"  name="admin_email" required>
    </div>

    <div class="form-group">
      <label for="pwd">Admin Password:</label>
      <input type="password" class="form-control"  placeholder="Enter Admin Password" style="width:500px"  name="admin_password" required>
    </div>


    
    <p>
      
      <span> <button type="submit" class="btn btn-success">Login</button></span>
      <span style="margin-left:300px"><a href="{{url('/user_registration')}}">create account</span>

    </p>

  </form>

</div>
</div>

</body>
</html>
