<?php

include('../include/connect.php');

if(isset($_POST['insert_cat'])){

 echo $_POST['cat_title'];
  $category_title=$_POST['cat_title'];

  // selct data from database
  $select_query = "select * from categories where category_title='$category_title'";
  
  $result_select = mysqli_query($con,$select_query);
  $number = mysqli_num_rows($result_select);
  if($number>0){
    echo "<script>alert('This Category already Inserted')</script>";
  }else{
  $insert_query = "insert into categories (category_title) values ('$category_title') ";
  echo "jjjjjjd";
  $result = mysqli_query($con,$insert_query);
  echo $result;
  if($result){
    echo"<script>alert('Categories has been inserted succefully')</script>";
  }
}
}



?>

<h2 class="text-center">Insert Category</h2>
<form action="" method="post" class="mb-2" >
<div class="input-group w-90 mb-3 ">
  <span class="input-group-text" id="basic-addon1 bg-info "> <i  class="fa-solid fa-receipt" ></i> </span>
  <input type="text" class="form-control" placeholder="Insert Categories" name="cat_title" >
</div>
<div class="input-group w-10 mb-2 m-auto ">
  
  <input type="submit" class=" bg-info border-0 p-2 my-2"  name="insert_cat" value="Insert Categories"  aria-label="Username" aria-describedby="basic-addon1">
  <!-- <button class="bg-info p-2 my-3 border-0" >Insert Categories</button> -->
</div>
</form>


