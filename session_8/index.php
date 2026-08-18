
<?php

// print_r($_POST);


// if(isset($_POST['submit']) == true){

// $num1=  $_POST['num1'];
// $num2=  $_POST['num2'];
// $operation = $_POST['operation'];


// switch($operation){
//     case '+':
//      echo   $num1 + $num2 ;
//      break ;

//       case '-':
//      echo   $num1 - $num2 ;
//      break ;

//       case '*':
//      echo   $num1 * $num2 ;
//      break ;

//       case '/':
//      echo   $num1 / $num2 ;
//      break ;


//      default:
//      echo "not valid operators";
// }



// }



//////////////////////////////////////////////////////////////////////////////////
/************************* session  && cookies  ******************************* */


// if(isset($_POST['submit']) == true){

// $username = $_POST['username'];
// $password = $_POST['password'];


// if(isset($_POST['remember_me'])
//     && $_POST['remember_me'] == true){

// setcookie('username' ,$username ,time()+60);
// setcookie('password' ,$password ,time()+60);

// echo "welcome ". $_COOKIE['username'];

// }


// }



//////////////////////////////////////////////////////////
/***********************Session **************** */




// if(isset($_POST['submit']) == true){

// session_start();

// $username = $_POST['username'];
// $password = $_POST['password'];


// if(isset($_POST['remember_me'])
//     && $_POST['remember_me'] == true){

// setcookie('username' ,$username ,time()+60);
// setcookie('password' ,$password ,time()+60);

// echo "welcome ". $_COOKIE['username'];

// }

// $_SESSION['username'] = $username; 
// $_SESSION['password'] = $password; 

// // print_r($_SESSION);

// header('location:welcome.php');





// }

//////////////////////////////////////////////////////////////////////////////
/***************************** Server ************************************ */

// echo "<pre>";
// print_r($_SERVER);
// die();

// if($_SERVER['REQUEST_METHOD'] == 'POST'){
// session_start();  //SESSIONID
// $username = $_POST['username'];
// $password = $_POST['password'];
// $errors =[];

// if(strlen($username) < 3   || strlen($username) >12){
//     $errors[] = "The user name should be between 3 and 12" ;
// }

// if(strlen($password) < 3   || strlen($password) >12){
//     $errors[] = "The password should be between 3 and 12" ;
// }

// if($errors){
//    $_SESSION['errors']  = $errors ;
//    header('location:form.php');
//    exit();
// }
// $_SESSION['username'] = $username; 
// // $_SESSION['password'] = $password; 

// // print_r($_SESSION);

// header('location:welcome.php');

// }
// else{
//     header('location:form.php');
// }




////////////////////////////////////////////////////////
/*********************** Files  *********************** */

// print_r($_POST);
// echo "<pre>";
// print_r($_FILES);


// print_r($_FILES['image']['name']);

// $image = $_FILES['image'] ; 

// $image_name = $image['name'] ;
// $tmp_name = $image['tmp_name'];

// $ext = pathinfo($image_name ,PATHINFO_EXTENSION);  //3

// $new_name = uniqid().".".$ext;              //2

// move_uploaded_file($tmp_name  ,$new_name );    //1

// ?>
 <!-- <img src="<?php  //echo $new_name  ?>" alt=""> -->



<?php

/////////////////////////////////////////////////////////////
/*******************  Request =>post get ************************** */

// print_r($_REQUEST);
// setcookie('username');
// $_COOKIE['username'];



/////////////////////////////////////////////////////////////////
/**
 * 10=>80
 * 
 * 10=>79 
 * 
 * 1  0    [1-7][0-9]  =>10   79 
 * 7  9 
 * 
 * 
 * ^([1-7][0-9] |80)$
 */