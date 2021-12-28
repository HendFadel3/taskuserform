<!DOCTYPE html>
<html lang="en">
<head>
  <title>student</title>
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

  <h2>student</h2>
 
 
  <form  action="<?php echo url('/student/update')?>"   method="post"  >

  <input type = "hidden" name="_token" value="<?php echo csrf_token();?>">
  <input type="hidden" value="{{$data->id}}" name="id">
  
  
  <div class="form-group">
    <label for="exampleInputName">Name</label>
    <input type="text" class="form-control" id="exampleInputName"  name="name" value="{{ $data->name}}" aria-describedby="" placeholder="Enter Name">
  </div>


  <div class="form-group">
    <label for="exampleInputEmail">Email </label>
    <input type="text"   class="form-control" id="exampleInputEmail1" name="email"  value="{{ $data->email}}" aria-describedby="emailHelp" placeholder="Enter email">
  </div>

  

  <label for="img">Select CV:</label>
  <input type="file" id="img" value="{{$data->cv}}" name="cv" >
  
 <br></br>



  



  
  
  <button type="submit" class="btn btn-primary">Update</button>
</form>
</div>

</body>
</html>