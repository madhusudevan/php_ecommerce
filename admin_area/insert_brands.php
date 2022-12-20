

<?php

include('../include/connect.php');

if(isset($_POST['insert_brand'])){

// echo $_POST['cat_title'];
  $brand_title=$_POST['brand_title'];

  // selct data from database
  $select_query = "select * from brands where brand_name='$brand_title'";
  
  $result_select = mysqli_query($con,$select_query);
  $number = mysqli_num_rows($result_select);
  if($number>0){
    echo "<script>alert('This Brand already Inserted')</script>";
  }else{
  $insert_query = "insert into brands (brand_name) values ('$brand_title') ";

  $result = mysqli_query($con,$insert_query);
  echo $result;
  if($result){
    echo"<script>alert('Brands has been inserted succefully')</script>";
  }
}
}



?>


<h2 class="text-center">Insert Brands</h2>

<form action="" method="post" class="mb-2" >
<div class="input-group w-90 mb-3 ">
  <span class="input-group-text" id="basic-addon1 bg-info "> <i  class="fa-solid fa-receipt" ></i> </span>
  <input type="text" class="form-control" placeholder="Insert Brands" name="brand_title" aria-label="brands" aria-describedby="basic-addon1">
</div>
<div class="input-group w-10 mb-2 m-auto ">
  
  <input type="submit" class="form-control bg-info" placeholder="Insert Brand" name="insert_brand" value="insert Brand" aria-label="Username" aria-describedby="basic-addon1">
  <!-- <button class="bg-info p-2 my-3 border-0" >Insert Brands</button> -->
</div>
</form>