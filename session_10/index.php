<?php

require "dbc.php";

$query = "SELECT * FROM `customers`";

$result =    mysqli_query($connection , $query );

$customers =  mysqli_fetch_all($result ,MYSQLI_ASSOC) ; 

// echo "<pre>";
// print_r($data);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>



<table class="table table-striped">
<thead>
    <th>index</th>
    <th>first_name</th>
    <th>last_name</th>
    <th>email</th>
    <th>gender</th>
    <th>money</th>
    <th>city</th>
    <th>country</th>
    <th>country_code</th>
</thead>


<tbody>
    
<?php 
$i = 1;
foreach($customers  as $customer) {?>
    <tr>
        <td><?php echo $i++ ?></td>
        <td><?php echo $customer['first_name'] ?></td>
        <td><?php echo $customer['last_name'] ?></td>
        <td><?php echo $customer['email'] ?></td>
        <td><?php echo $customer['gender'] ?></td>
        <td><?php echo $customer['money'] ?></td>
        <td><?php echo $customer['city'] ?></td>
        <td><?php echo $customer['country'] ?></td>
        <td><?php echo $customer['country_code'] ?></td>
    </tr>
<?php } ?>
</tbody>



</table>





  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
