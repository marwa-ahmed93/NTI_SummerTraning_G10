<?php

/*************************Filter******************************** */
/**
 * filter var
 * filter input
 */



// $email   = "ahmed@gmail.com";
// echo filter_var($email  ,FILTER_VALIDATE_EMAIL );   //true   false


// $num =10;

// echo filter_var($num , FILTER_VALIDATE_INT,[
//     'options'=>['min_range'=>16  , 'max_range'=>30]
// ]);




// $username = "Ahmed";

// echo filter_var($username , FILTER_VALIDATE_REGEXP,
//['options'=> ['regexp'=>'/^[A-Z][a-z]{4}$/'] ]);



////////////////////////////////////////////////////////////////////////

include('validate.php');
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST'){

$errors =[];

foreach($validates as $validate_name=>$validate_value){
 
$value = filter_input(INPUT_POST ,$validate_name ,
$validate_value['filters'] ,$validate_value['my_options']) ;

if(empty($_POST[$validate_name])){
    $errors[$validate_name] = "You must fill $validate_name";
}
elseif($value  == false){
     $errors[$validate_name] = $validate_value['error'];
}


}

if($errors){
    $_SESSION['errors']= $errors;
    header('location:form.php');
    exit();
}

header('location:welcome.php');

}