<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .dark-border {
      border: 2px solid #343a40; 
      border-radius: 5px;
      padding: 20px; /
    }
  </style>
</head>
<body>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6 dark-border">
      <h2 class="text-center mb-4">Login</h2>
      <form action="" method="post">
        
        
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name=email class="form-control" id="email" placeholder="Enter your email">

        </div>
     
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password" >
        </div>
        
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
      </form>
    </div>
  </div>
</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
