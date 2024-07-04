<!doctype html>
<html lang="en" style="scrollbar-width:none;">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shop Online</title>
   
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
  </head>
  <body style="background-color:#f0f0f0;">
<!-- NavBar -->
   <nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container-fluid">
    <a class="navbar-brand" href=""><img src="../Images/logo.png" alt="" style ="width:45px; height:45px;"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin-left:350px;">
        <li class="nav-item" style="margin-left:40px;">
          <a class="nav-link active" aria-current="page" href="index.php" >Home</a>
        </li>
        <li class="nav-item" style="margin-left:40px;">
          <a class="nav-link active" aria-current="page" href="#" >Product</a>
        </li>
        <li class="nav-item" style="margin-left:40px;">
          <a class="nav-link active" aria-current="page" href="registration.php" >Register</a>
        </li>
        <li class="nav-item" style="margin-left:40px;">
          <a class="nav-link active" aria-current="page" href="#" >Contacts</a>
        </li>
     

        <li class="nav-item dropdown"style="margin-left:40px;">
          <a class="nav-link dropdown-toggle nav-link active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Brands
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        
      </ul>
      <form class="d-flex" role="search" style="margin-left:90px;">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"  style="min-width:300px;">
        <button class="btn btn-outline-dark" type="submit" style="color:black">Search</button>
      </form>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link" href="cart.php"><img src="../Images/cart.png" alt="cart" style ="width:25px; height:25px;"><sup>1</sup></a>
        </li> 
       
      </ul>
      </div>

    </div>
  </div>
</nav>
   <!-- NavBar End -->

<!-- child navbar -->
 <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  <ul class="navbar-nav me-auto">
    <li class="nav-item">
      <a class= "nav-link" href="">welcome guest</a>
    </li>
    <li class = "nav-item">
      <a  class= "nav-link" href="login.php">Login</a>
    </li>
  </ul>
 </nav>
<!-- child navbar end -->

<!-- second navbar child -->
 <div class ="abc" style="padding:0px;background-color:#f0f0f0;" >
  <h3 class= "text-center">MY STORE</h3>
  <p class ="text-center" style="margin:0px;">Welcome to my-store</p>
 </div>
 <!-- second navbar child end -->


   <!-- Image Carousel add -->
   <div id="carouselExample" class="carousel slide" style="padding:0px; height:70vh">
  <div class="carousel-inner" style="padding:0px; height:70vh">
    
    <div class="carousel-item active" style="padding:0px; height:70vh">
      
      <img src="../Images/crouser.avif" class="d-block w-100" alt="../Images/test.jpeg"  style="padding:0px; height:70vh">
    </div>
    <div class="carousel-item">
      <img src="../Images/crouser.avif" class="d-block w-100" alt="Images/test.jpeg"  style="padding:0px; height:70vh">
    </div>
    <div class="carousel-item">
      <img src="../Images/crouser.avif" class="d-block w-100" alt="Images/test.jpeg"  style="padding:0px; height:70vh">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
   <!-- Image Carousel add End -->

 <!-- Image Carousel items -->
  <br>
<h2 style="margin-left:20px;">Luxury Clothes</h2>
<div class="scrollable" style="display:flex; margin-left:40px;  margin-right:40px;overflow-x:auto;scrollbar-width:none">
<div class="card" style="min-width:300px;margin:5px; border:none;">
  <img class="card-img-top" src="../Images/itemsimages/clothes/child.jpg" class="d-block w-100" alt="Card image cap" style=" min-width:300px;min-height:300px;max-width:300px;max-height:300px">
  <div class="card-body">
  <div class="container1" style="display:flex;justify-content:center;">
  <h5 class="card-title" >Card title</h5> </div>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary"style="margin-left:80px;">Add to Cart</a>
  </div>
</div>
<div class="card" style="min-width:300px;margin:5px;border:none;">
  <img class="card-img-top" src="../Images/itemsimages/clothes/shirt.jpeg" class="d-block w-100 " alt="Card image cap" style="min-width:300px;min-height:300px;max-width:300px;max-height:300px">
  <div class="card-body" >
    <div class="container1" style="display:flex;justify-content:center;">
    <h5 class="card-title" >Card title</h5> </div>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary"style="margin-left:80px;">Add to Cart</a>
  </div>
</div>
<div class="card" style="min-width:300px;margin:5px;border:none;">
  <img class="card-img-top" src="../Images/itemsimages/clothes/frock.jpeg" class="d-block w-100" alt="Card image cap" style="min-width:300px;min-height:300px;max-width:300px;max-height:300px">
  <div class="card-body">
  <div class="container1" style="display:flex;justify-content:center;">
  <h5 class="card-title" >Card title</h5> </div>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary"style="margin-left:80px;">Add to Cart</a>
  </div>
</div>
<div class="card" style="min-width:300px;margin:5px;border:none;">
  <img class="card-img-top" src="../Images/itemsimages/clothes/girlfrock.jpg" class="d-block w-100" alt="Card image cap" style="min-width:300px;min-height:300px;max-width:300px;max-height:300px">
  <div class="card-body">
  <div class="container1" style="display:flex;justify-content:center;">
  <h5 class="card-title" >Card title</h5> </div>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary"style="margin-left:80px;">Add to Cart</a>
  </div>
</div>
<div class="card" style="min-width:300px;margin:5px;border:none;">
  <img class="card-img-top" src="../Images/itemsimages/clothes/hudi.jpg" class="d-block w-100" alt="Card image cap" style="min-width:300px;min-height:300px;max-width:300px;max-height:300px">
  <div class="card-body">
  <div class="container1" style="display:flex;justify-content:center;">
  <h5 class="card-title" >Card title</h5> </div>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary"style="margin-left:80px;">Add to Cart</a>
  </div>
</div>
<div class="card" style="min-width:300px;margin:5px;border:none;">
  <img class="card-img-top" src="../Images/itemsimages/clothes/saree.jpeg" class="d-block w-100 " alt="Card image cap" style="max-width:300px;max-height:300px">
  <div class="card-body">
  <div class="container1" style="display:flex;justify-content:center;">
  <h5 class="card-title" >Card title</h5> </div>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary"style="margin-left:80px;">Add to Cart</a>
  </div>
</div>

<a class="scroll-carousel_carouselControl__Id0y9 scroll-carousel_carouselHorizontalControl__1gDln scroll-carousel_feedRight__3tG5G" data-id="carouselControlFeedNext"></a>

</div>
<hr>
<br>

<h2 style="margin-left:20px;">Luxury Clothes</h2>
<div class="scrollable" style="display:flex; margin-left:40px;  margin-right:40px;overflow-x:auto;scrollbar-width:none">
<div class="card" style="min-width:300px;margin:5px; border:none;">
  <img class="card-img-top" src="../Images/itemsimages/clothes/child.jpg" class="d-block w-100" alt="Card image cap" style=" min-width:300px;min-height:300px;max-width:300px;max-height:300px">
  <div class="card-body">
  <div class="container1" style="display:flex;justify-content:center;">
  <h5 class="card-title" >Card title</h5> </div>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary"style="margin-left:80px;">Add to Cart</a>
  </div>
</div>
<div class="card" style="min-width:300px;margin:5px;border:none;">
  <img class="card-img-top" src="../Images/itemsimages/clothes/shirt.jpeg" class="d-block w-100 " alt="Card image cap" style="min-width:300px;min-height:300px;max-width:300px;max-height:300px">
  <div class="card-body" >
    <div class="container1" style="display:flex;justify-content:center;">
    <h5 class="card-title" >Card title</h5> </div>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary"style="margin-left:80px;">Add to Cart</a>
  </div>
</div>
<div class="card" style="min-width:300px;margin:5px;border:none;">
  <img class="card-img-top" src="../Images/itemsimages/clothes/frock.jpeg" class="d-block w-100" alt="Card image cap" style="min-width:300px;min-height:300px;max-width:300px;max-height:300px">
  <div class="card-body">
  <div class="container1" style="display:flex;justify-content:center;">
  <h5 class="card-title" >Card title</h5> </div>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary"style="margin-left:80px;">Add to Cart</a>
  </div>
</div>
<div class="card" style="min-width:300px;margin:5px;border:none;">
  <img class="card-img-top" src="../Images/itemsimages/clothes/girlfrock.jpg" class="d-block w-100" alt="Card image cap" style="min-width:300px;min-height:300px;max-width:300px;max-height:300px">
  <div class="card-body">
  <div class="container1" style="display:flex;justify-content:center;">
  <h5 class="card-title" >Card title</h5> </div>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary"style="margin-left:80px;">Add to Cart</a>
  </div>
</div>
<div class="card" style="min-width:300px;margin:5px;border:none;">
  <img class="card-img-top" src="../Images/itemsimages/clothes/hudi.jpg" class="d-block w-100" alt="Card image cap" style="min-width:300px;min-height:300px;max-width:300px;max-height:300px">
  <div class="card-body">
  <div class="container1" style="display:flex;justify-content:center;">
  <h5 class="card-title" >Card title</h5> </div>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary"style="margin-left:80px;">Add to Cart</a>
  </div>
</div>
<div class="card" style="min-width:300px;margin:5px;border:none;">
  <img class="card-img-top" src="../Images/itemsimages/clothes/saree.jpeg" class="d-block w-100 " alt="Card image cap" style="max-width:300px;max-height:300px">
  <div class="card-body">
  <div class="container1" style="display:flex;justify-content:center;">
  <h5 class="card-title" >Card title</h5> </div>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary"style="margin-left:80px;">Add to Cart</a>
  </div>
</div>

<a class="scroll-carousel_carouselControl__Id0y9 scroll-carousel_carouselHorizontalControl__1gDln scroll-carousel_feedRight__3tG5G" data-id="carouselControlFeedNext"></a>

</div>
<hr>
<br>




   <!-- Image Carousel  Items End -->

   <!-- footer  -->
    <br>
   <div class="card text-center  bg-secondary"style="border-radius:0px;color:white;">
  <div class="card-header bg-tertiary">
    Back to top
  </div>
  </div>
  <div class="card  bg-secondary"style="border:none;border-radius:0px;color:white;">
<div class="container" style="display:flex">

<div class="card bg-secondary" style="width:500px;margin:5px;border:none;border-radius:0px;color:white;">
  <div class="card-body">
    <ul style="list-style:none">
    <h5 class="card-title text-dark">Get to Khow Us</h5>
    
    <li class="nav-item">  <a class="nav-link active" aria-current="page" href="#">About Us</a> </li>
    <li class="nav-item">  <a class="nav-link active" aria-current="page" href="#">Careers</a> </li>
    <li class="nav-item">  <a class="nav-link active" aria-current="page" href="#">New Release</a> </li>
    <li class="nav-item">  <a class="nav-link active" aria-current="page" href="#">Our Services</a> </li>
    </ul>
  </div>
</div>

  <div class="card bg-secondary" style="width:500px;margin:5px;border:none;color:white;">
  <div class="card-body text-center">
    <ul style="list-style:none">
    <h5 class="card-title text-dark">Connect with Us</h5> 
    <li class="nav-item">  <a class="nav-link active" aria-current="page" href="#">Facebook</a> </li>
    <li class="nav-item">  <a class="nav-link active" aria-current="page" href="#">Twitter</a> </li>
    <li class="nav-item">  <a class="nav-link active" aria-current="page" href="#"></a>Instagram </li>
    </ul>
  </div>
</div>


<div class="card bg-secondary " style="width:500px;margin:5px;border:none ;color:white;">
  <div class="card-body text-center">
    <ul style="list-style:none">
    <h5 class="card-title text-dark">Make Money with Us</h5>
    
    <li class="nav-item">  <a class="nav-link active" aria-current="page" href="#">Sell on MY STORE</a> </li>
    <li class="nav-item">  <a class="nav-link active" aria-current="page" href="#">Become an Affiliate</a> </li>
    <li class="nav-item">  <a class="nav-link active" aria-current="page" href="#">MyStore Payments</a> </li>
    </ul>
  </div>
</div>

</div>
</div>


<div class="card text-center  bg-secondary"style="border:none;color:white;border-radius:0px;">
  <div class="card-body">
    <h5 class="card-title">Thanks for visiting</h5>
    <p class="card-text">Be a family of my store,and get most discounted offers</p>
    <a href="#" class="btn btn-primary">Premium Membership</a>
  </div>
  <div class="card-footer bg-dark ">
    All right reserved &copy created by Ashish Painuly
  </div>
</div>
  <!-- Footer End -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>