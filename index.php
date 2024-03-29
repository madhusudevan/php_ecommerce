
<!-- connect file -->


<?php
include('include/connect.php');
include('./functions/common_function.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EC Shope</title>

    <!-- css Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- font awasome Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- navbar -->
    <div class="container-fluid p-0">
        <!-- first child -->
        <nav class="navbar navbar-expand-lg navbar-light bg-info ">
  <div class="container-fluid">
    <!-- <a class="navbar-brand" href="#">Logo</a> -->
    <img src="./images/images (1).jpg" class="logo" alt="">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup> </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Total Price 100/-</a>
        </li>
       
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<!-- second child -->
<nav class="navbar nvbar-expand-lg navbar-dark bg-secondary">
  <ul class="navbar-nav me-auto ">
  <li class="nav-item">
          <a class="nav-link" href="#">Welcome Guest  </a> 
          
        </li>
        
  </ul>

</nav>
<!-- Third Child -->
<div class="bg-light">
  <h3 class="text-center">Hidden Store</h3>
  <p class="text-center">
    Communication is at the Heart of e-commerce and community
  </p>
</div>

<!-- Fourth Child -->
<div class="row px-1">
  <div class="col-md-10">
    <!-- products -->
    <div class="row">
      
    
    
 
    <!-- fetching products -->
   
   
<?php
//calling function
//getProducts();
get_unique_categories();
 get_unique_brands()


?>

    </div>
    
  </div>
  
  <div  class="col-md-2 bg-secondary p-0 "  >
    <!-- sidenav -->
    <ul class="navbar-nav me-auto text-center">
      <!-- Brands to be displayed -->
      <li class="nav-item bg-info">
        <a href="#" class="nav-link text-light"><h4> Brands</h4> </a>
      </li>

      <?php

      //brands function calling
      getBrands()

      ?>
     
    </ul>
    <!-- Catogaries to be displayed -->
    <ul class="navbar-nav me-auto text-center">
    <li class="nav-item bg-info">
        <a href="#" class="nav-link text-light"><h4> Catogaries</h4> </a>
      </li>

      <?php

     getCategories();

      ?>
     
    </ul>

   
  </div>
</div>






<!--  last child -->
<div class=" bg-info p-3 text-center " style="padding:0px;" >
    <p>all right reserved c disply at vph</p>
</div>
    </div>






    <!-- bootstrap js Link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>