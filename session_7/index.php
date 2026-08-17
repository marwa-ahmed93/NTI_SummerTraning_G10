<?php

// echo "Welcome";



// $x = 10;
// int x =10 ;
// echo gettype($x);
// var_dump($x);
// $age = 8;

// if($age >10 ){
// echo "hi";
// }
// elseif($age >5){
//     echo "five";
// }
// else{
//     echo "nn";
// }

// switch()
///////////////////////////////////////////////
// $username = "ahmed";
// $is_login = true ;
// $role = 1; 

// if($is_login == 1){

//     echo "welcome $username <br>";

//     if($role == 0){
//         echo "view CP";
//     }
// }
////////////////////////////////////////////////
// $favColor = "red";
// switch ($favColor) {
//     case "green":
//         echo "your fav color is green";
//         break;

//     case "red":
//         echo "your fav color is red";
//         break;


//     case "blue":
//         echo "your fav color is blue";
//         break;

//     case "tomato":
//         echo "your fav color is tomato";
//         break;

//     default:
//         echo "invalid color";
// }

/////////////////// loop /////////////////////////////////////////////

// for($i =0  ;  $i<=10 ; $i++ ){
//     echo "welcome <br>";
// }

// $i =0;
// while($i<=10 ){
// echo "welcome <br>";
// $i++;

// }

// $i =0;
// do{
//   echo "welcome <br>";
//   $i++;  
// }while($i<=10);



////////////////////////////////////////////////
// $is_active = true ;

// while($is_active == 0){
//     echo "welcome";
// }

// do{
//      echo "welcome";
// }while($is_active == 0);

////////////////////////////////////////////////////////////////////////////////////////////








////////////////////////////////////////////    Array    ////////////////////////////////////////////////
/*****************
 **************************************1- indexed array ***************************** 
 * ********************** */
// $students_name1 = "ahmed";
// $students_name2 = "mohamed";
// $students_name3 = "mohamed";

// echo $students_name1;

// $students = [];
// $students = array();
// echo gettype($students);

//             0             1      2       3         4        5      6  7    8     9
// $students = ['ahmed' , 'mohamed','mona','asmaa' , 'eman','malik' , true ,10   ];
// echo count($students);
// print_r($students);
// var_dump($students);
// echo $students[0]."<br>";
// echo $students[1]."<br>";
// echo $students[2]."<br>";
// echo $students[3]."<br>";
// $students[1] = "marwa";

// print_r($students);

// for($i=0 ; $i<count($students) ; $i++){
//     echo $students[$i] ."<br>";
// }

/////////////////////////////////////////////////////////////////////
   /********** foreach  ********** */

//    $students = ['ahmed' , 'mohamed','mona','asmaa' , 'eman','malik' , true    ];

//    foreach($students  as $student){
//      echo $student . '<br>' ;
//    }


////////////////////////////////////////////////////////////////////////
//************ 2- Assoc Array******************** */
/** key => value   */

// $persons = [
// 'name' => 'malik' ,
// 'age' => 5 ,
// 'gender'=> 'male',
// 'title' =>'Engineer' 
// ];
// print_r($person);
// echo $person['name'] ."<br>";
// echo $person['age'] ."<br>";
// echo $person['gender'] ."<br>";
// $person['name'] = "mohamed";

// $person['title'] = "doctor";

// print_r($person);

// for($i =0 ;$i< 5 ; $i++){
//     echo $person[$i];
// }

// foreach($persons as $key=>$value){
//     echo "The Person $key is : " . $value ."<br>";
// }


////////////////////////////////////////////////////////////////////////////////////////////
/***************************3- Multi diminutions array  *********************************** */

// $students = [
// // 0      1       2    
// ['marwa',25 , 'female'],      //0
// ['mohamed' , 28 , 'male'],     //1
// ['zain' , 1 , 'male']          // 2

// ];
// echo "<pre>";

// print_r($students[2][2]);
// echo $students[1][0];

///////////////////////////////////////////

// $students = [
//       //  0     1     2
// 'a'=> ['marwa',25 , 'female'],
// 'b'=> ['mohamed' , 28 , 'male'], 
// 'c'=> ['zain' , 1 , 'male']  ,
// 'd' =>['name'=>'malik' , 'age'=>20 , 'gender'=> 'male']
// ];
// // echo $students['a'][0];

// echo $students['d']['name'];
///////////////////////////////////////////////



// $students =[
//     'a' =>['name'=>'zain' , 'age'=>10 , 'gender'=> 'male'],
//     'b' =>['name'=>'nour' , 'age'=>20 , 'gender'=> 'female'],
//     'c' =>['name'=>'mody' , 'age'=>15 , 'gender'=> 'male']
// ];
// // echo $students['c']['name'];
// foreach($students as $key=>$value){
//  foreach($value as $k=> $v){
//     echo  $k ." : ". $v . "<br>" ;
// }
// }

// $x = 10 ;



///////////////////////////////////////////////////////////////////////////
/*********************************** Pass By Value & reference **************************************/

// $x=10;
// echo $x."<br>";   //10

// $y= &$x ;
// echo $y."<br>";    //10


// echo "<hr>";


// $x=20;              //overwrite
// echo $x."<br>";   //20  20

// echo $y."<br>";  //10  20


/////////////////////////////////////////////////////////////////////////////////////////////
/***************************************    Functions    re-use         ********************************************* */


// function calc($rev=500 , $exp=100 ,$taxesRate=0.14 , $otherEsp=10 ){

// $income = $rev-$exp;
// $incomeWithTaxes = $income*$taxesRate ;
// $incomeAfterTaxes = $income-$incomeWithTaxes ;
// $total = $incomeAfterTaxes - $otherEsp ;
// echo $total ;

// }

// calc(500 , 10,0.14 , 20);
// echo "<br>";

// calc(600 , 100 , 0.14 , 10);
// echo "<br>";

// calc(600 , 200 , 0.14 , 30);
// echo "<br>";
// $x1 = 700 ;
// calc($x1 , 150 , 0.14 , 30);
// echo "<br>";

// calc(taxesRate:0.15);  //334  php8


///////////////////////////////////////////////////////////////////////
/** 
 * void
 * return
 */

// function sum($a ,$b){   //void
//     $result = $a +$b ;
//     echo $result ;
// }
// $x =  sum(10,20);  //30
// echo $x +50 ;


// function greet($name){
//     return "Hello $name" ;
// }

// // function greet($name){  
// //     return "Hello $name" ;
// // }
// echo  greet('mohmed');
//     //  gettype($x);


/////////////////////////////////////////////////
/**
 * write function takes an array [1,2,3,8,5]  return total 
 * 
 */
// $arr = [4,5,8,6,9];

// function sumArray($arr){
// $sum = 0;

// for($i=0 ; $i<count($arr) ; $i++){
//       $sum += $arr[$i]; 
// }
// return $sum;
// }
// echo sumArray($arr);

////////////////////////////////////////////////////////////////////////
/***************************  Scope   ************************* */
/**
 * Global
 * Local
 */

// $x = 10;    //global


// function age($x){   //1
//     $y = 10;    //local
//     $y++ ;  
//     echo $y ;//11
//     // global $x;  //2
//     echo $x;
//     echo $GLOBALS['x'];   //3
// }
// age($x) ;  //11
// echo "<br>";
// // age() ;  //11

// print_r($GLOBALS);
// echo "<br>";
// echo $GLOBALS['x'];





///////////////////////////////////////////////////////////////////////////
  /********************** static Scope   **************************** */

//   function age(){
//     static $y = 10 ;
//     $y++ ;
//     echo $y  ;

//   }

//   age();  
//   echo "<br>";        //11

//   age() ;
//   echo "<br>";       //12


//     age() ;
//   echo "<br>";       //13


// function trackVisit(){
//     static $count = 0;
//     $count ++;
//     echo $count ;
// }
// trackVisit();
//  echo "<br>";
// trackVisit();
//  echo "<br>";
// trackVisit();
//  echo "<br>";


///////////////////////////////////////////////////////////////////////////////////
/******************************* Constant *************************************/
// const NAME = "marwa";  //php8
// define('x' , 20);

// const NAME = "Zoona" ;   //GLOBAL

// function greet(){
//     echo "welcom ". NAME;
// }
// greet();


////////////////////////////////////////////////////////////////////////////////////////////////
/******************************* Super Global Variable ************************************** */
/**
 * GET   url
 * POST  body
 */

// print_r($GLOBALS);
//    http 



/////////////////////////////////////////////////////////////////////////////////

// echo "welcome";
// print_r($_GET);



// if(isset($_GET['submit']) == true){
// echo "Welcom ". $_GET['name'] ."<br>";
// echo "password ". $_GET['password'];
// }
// else{
//     echo "Login First";
// }




///////////////////////post////

// if(isset($_POST['submit']) == true){
// echo "Welcom ". $_POST['name'] ."<br>";
// echo "password ". $_POST['password'];
// }

// else{
//     echo "Login First";
// }


/////////////////////////////////////////

// print_r($_POST);




// if(isset($_POST['submit'])){

// echo $_POST['username'];
// echo $_POST['password'];

// }
// else{
//     echo "Please Login";
//     header('location:form.php');
// }

///////////////////////////////////
$arr = [
    'username'=>'marwa',
    'password'=>'123456'
];

if(isset($_POST['submit'])){ 

 $username =   $_POST['username'] ;
 $password =  $_POST['password'];


 if($username == $arr['username']  && $password == $arr['password']){
    echo "welcome  $username";
 }
 else{
    echo "please Enter valid data";
 }

}

else{
    echo "Please Login";
    header('location:form.php');
}





// if(isset($_POST['submit'])){
//    $user_name = $_POST['name'] ;
//    $password = $_POST['password'] ;

//    if($user_name == $arr['username'] 
//    && $password == $arr['password']){
//     echo "welcome $user_name" ;
//    }
//    else{
//     echo "invalid data";
//    }

// }