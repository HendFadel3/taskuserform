<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
  <h2>Student</h2>
 
 
  <form  action="<?php echo url('/student/store')?>"   method="post"  enctype="multipart/form-data" >

  <input type = "hidden" name="_token" value="<?php echo csrf_token();?>">

  <div class="form-group">
    <label for="exampleInputName">Name</label>
    <input type="text" class="form-control" id="exampleInputName"  name="name" aria-describedby="" placeholder="Enter Name">
  </div>


  <div class="form-group">
    <label for="exampleInputEmail">Email </label>
    <input type="text"   class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
  </div>

  
  <div class="form-group">
    <label for="exampleInputName">Password</label>
    <input type="password" class="form-control" id="exampleInputName"  name="password" aria-describedby="" placeholder="Enter Name">
  </div>


  <label for="img">Select CV:</label>
  <input type="file" id="img" name="cv" >
  
 <br></br>



  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

</body>
</html>