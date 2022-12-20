<?php
//include connect file
include('./include/connect.php');


function getProducts(){
  global $con;
   if(!isset($_GET['category'])){
     if(!isset($_GET['brand'])){
    
    $select_query = "select * from products order by rand() limit 0,9";
$result_query = mysqli_query($con,$select_query);

while($row = mysqli_fetch_assoc($result_query)){
  $product_id = $row['product_id'];
  $product_title = $row['product_title'];
  $product_description = $row['product_description'];
  $product_keyword = $row['product_keyword'];
  $category_id = $row['category_id'];
  $brand_id = $row['brand_id'];
  $product_image1 = $row['product_image1'];
  $product_image2 = $row['product_image2'];
  $product_image3 = $row['product_image3'];
  $product_price = $row['product_price'];


echo  "<div class='col-md-4 mb-2' style='padding:0px;'>
   <div class='card'style='width: 16rem;' >
<img src='./admin_area/product_images/$product_image1' style='width:100%; height:200px; object-fit:contain;'  class='card-img-top' alt='...'>
 <div class='card-body'>
 <h5 class='card-title'> $product_title</h5>
 <p class='card-text'>$product_description</p>
 <a href='#' class='btn btn-info'>Add to Cart</a>
   <a href='#' class='btn btn-primary'>View More</a>'
   </div>
   </div>
   </div>";
}
 }
 }
}
// getting unique categories
function get_unique_categories(){
  global $con;
   if(isset($_GET['category'])){
    $category_id=$_GET['category'];
    
    
    $select_query = "select * from products where category_id=$category_id";
$result_query = mysqli_query($con,$select_query);
$no_of_rows=mysqli_num_rows($result_query);
if($no_of_rows==0){
  echo'<h2 class="text-center text-danger" > No stock for this categories</h2>';
}

while($row = mysqli_fetch_assoc($result_query)){
  $product_id = $row['product_id'];
  $product_title = $row['product_title'];
  $product_description = $row['product_description'];
  $product_keyword = $row['product_keyword'];
  $category_id = $row['category_id'];
  $brand_id = $row['brand_id'];
  $product_image1 = $row['product_image1'];
  $product_image2 = $row['product_image2'];
  $product_image3 = $row['product_image3'];
  $product_price = $row['product_price'];


echo  "<div class='col-md-4 mb-2' style='padding:0px;'>
   <div class='card'style='width: 16rem;' >
<img src='./admin_area/product_images/$product_image1' style='width:100%; height:200px; object-fit:contain;'  class='card-img-top' alt='...'>
 <div class='card-body'>
 <h5 class='card-title'> $product_title</h5>
 <p class='card-text'>$product_description</p>
 <a href='#' class='btn btn-info'>Add to Cart</a>
   <a href='#' class='btn btn-primary'>View More</a>'
   </div>
   </div>
   </div>";
}
 }
 }

 function get_unique_brands(){
  global $con;
   if(isset($_GET['brand'])){
    $brand_id=$_GET['brand'];
    
    
    $select_query = "select * from products where brand_id=$brand_id";
$result_query = mysqli_query($con,$select_query);
$no_of_rows=mysqli_num_rows($result_query);
if($no_of_rows==0){
  echo'<h2 class="text-center text-danger" > No stock for this Brands</h2>';
}

while($row = mysqli_fetch_assoc($result_query)){
  $product_id = $row['product_id'];
  $product_title = $row['product_title'];
  $product_description = $row['product_description'];
  $product_keyword = $row['product_keyword'];
  $category_id = $row['category_id'];
  $brand_id = $row['brand_id'];
  $product_image1 = $row['product_image1'];
  $product_image2 = $row['product_image2'];
  $product_image3 = $row['product_image3'];
  $product_price = $row['product_price'];


echo  "<div class='col-md-4 mb-2' style='padding:0px;'>
   <div class='card'style='width: 16rem;' >
<img src='./admin_area/product_images/$product_image1' style='width:100%; height:200px; object-fit:contain;'  class='card-img-top' alt='...'>
 <div class='card-body'>
 <h5 class='card-title'> $product_title</h5>
 <p class='card-text'>$product_description</p>
 <a href='#' class='btn btn-info'>Add to Cart</a>
   <a href='#' class='btn btn-primary'>View More</a>'
   </div>
   </div>
   </div>";
}
 }
 }



//displaying brands in sidenavs
function getBrands(){
    global $con;

    $select_brand = "select * from brands ";
      $result_brands = mysqli_query($con,$select_brand);
     // $row_data= mysqli_fetch_assoc($result_brands);

      while($row_data=mysqli_fetch_assoc($result_brands)){
        $brand_title = $row_data['brand_name'];
        $brand_id = $row_data['brand_id'];
        echo "<li class='nav-item '>
        <a href='index.php?brand=$brand_id' class='nav-link text-light'> $brand_title </a>
      </li>";

      }
}



//displaying Categories in side navs
function getCategories(){
 

    global $con;
    $select_category = "select * from categories ";
    $result_categories = mysqli_query($con,$select_category);
   // $row_data= mysqli_fetch_assoc($result_brands);

    while($row_data=mysqli_fetch_assoc($result_categories)){
      $category_title = $row_data['category_title'];
      $category_id = $row_data['category_id'];
      echo "<li class='nav-item '>
      <a href='index.php?category=$category_id' class='nav-link text-light'> $category_title </a>
    </li>";

    }
  
}


?>