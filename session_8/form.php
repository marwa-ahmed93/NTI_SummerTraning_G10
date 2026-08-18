<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>

 <!-- int x =10 ; -->

    <!-- <form method="post" action="index.php" class="w-75 m-auto my-3">

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">First Number</label>
    <input type="number" name="num1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Second Number</label>
    <input type="number" name="num2" class="form-control" id="exampleInputPassword1">
  </div>

 <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Select Operation</label>
   <select name="operation" class="form-control" id="">
    <option value="+">Select</option>
    <option value="+">+</option>
    <option value="-">-</option>
    <option value="*">*</option>
    <option value="/">/</option>
   </select>
  </div>


  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form> -->





<!-- <?php 
// session_start();
// if(isset( $_SESSION['errors'])){
// foreach($_SESSION['errors']  as $error){
?>
 <div class="alert alert-danger w-75 m-auto my-2"> <?php  //echo $error ."<br>"; ?> </div>

<?php
 

// }
// unset($_SESSION['errors']);
// }

?>


    <form method="post" action="index.php" class="w-75 m-auto my-3">

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" name="username" 
    value="<?php if(isset($_COOKIE['username'])) echo $_COOKIE['username'] ; ?>"
     class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password"
     value="<?php if(isset($_COOKIE['password'])) echo $_COOKIE['password']  ;?>"
      class="form-control" id="exampleInputPassword1">
  </div>


<div class="mb-3 form-check">
    <input type="checkbox" name="remember_me" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Remember me</label>
  </div>

  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form> -->















    <!-- <form method="post" action="index.php" 
    class="w-75 m-auto my-3" enctype="multipart/form-data">

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Upload Image</label>
    <input type="file" name="image" 
  
     class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>





  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form> -->









    <!-- <form method="post" action="index.php?username=mohamed" 
    class="w-75 m-auto my-3">

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Upload Image</label>
    <input type="text" name="username" 
  
     class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>





  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form> -->









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>