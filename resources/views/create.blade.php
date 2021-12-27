<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Register</h2>
 
 
  <form  action="<?php echo url('/blog/store')?>"   method="post"  enctype="multipart/form-data" >

  <input type = "hidden" name="_token" value="<?php echo csrf_token();?>">

  <div class="form-group">
    <label for="exampleInputName">title</label>
    <input type="text" class="form-control" id="exampleInputName"  name="title" aria-describedby="" placeholder="Enter Name">
  </div>


  <div class="form-group">
    <label for="exampleInputEmail">cont </label>
    <input type="text"   class="form-control" id="exampleInputEmail1" name="content" aria-describedby="emailHelp" placeholder="Enter email">
  </div>

  



  



  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

</body>
</html>