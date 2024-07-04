<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .dark-border {
      border: 2px solid #343a40; 
      border-radius: 5px;
      padding: 20px; /
    }
  </style>
</head>
<body style="background-color:#EAF2F8" >

<div class="container mt-5" >
  <div class="row justify-content-center">
    <div class="col-md-6 dark-border"style="background-color:#AF7AC5 ;color:black;">
      <h2 class="text-center mb-4">Registration</h2>
      <form action="" method="post">
        
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" name=name class="form-control" id="name" placeholder="Enter your name" value= >
          
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name=email class="form-control" id="email" placeholder="Enter your email">

        </div>
      <div class="form-group">
          <label for="phoneno">Phone_No</label>
          <input type="integer" name=phone_no class="form-control" id="phoneno" placeholder="Enter Phone No" >
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password" >
        </div>
        <div class="form-group">
          <label for="confirmpassword">Confirm Password</label>
          <input type="password" name=confirmPassword class="form-control" id="confirmPassword" placeholder="Confirm Password" >
        </div>
    
        <div class="container" style="display:flex; justify-content:center;">
        <button type="submit" class="btn btn-primary btn-block" style="max-width:150px;">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
