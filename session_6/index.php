<?php


// echo "Hello World <br>";



// echo "marw  <br>";
// echo "marw  <br>";
// echo "marw <br>";
// echo "marw <br>";
// echo "marw <br>";
// echo "marw  <br>";
// echo "marw <br>";


/////////////////////////////////////////////////////////////
/*     variables
strongly type    int x = 5  string name= "marwa"
loosely php js    $name="marwa"    $x=10
*/

// echo 5+5 ;


// $x = 10 ;   //integer
// $x = "malik";  //string

// // echo $x+20 ."<br>";

// echo gettype($x) ."<br>";


// $user_name = "mohamed";
// echo $user_name ."<br>";

// echo gettype($user_name) ."<br>";

/**          Datatype     */

/**
 * number    $age =20 
 * float   $money = 15.5
 * boolean  $active = true
 * object  $color ={}
 * array   $friends = []
 * resource
 */


// $txt = "W3Schools.com";
// echo 'I love !'.$txt;


// $x = 5;
// var_dump($x);


// $cars = array("Volvo","BMW","Toyota");
// var_dump($cars);






/////////////////////////////////////////////////////////////////////////////////
/*  Casting
*1-automatic casting 
*2-manual casting
*/

// $num = "5" + 5 ;  //5+5 = 10     55 
// echo $num;


// $number = (int)"marwa" + 5 ;   // 0+5 => 5
// echo $number ;


// $number = (int)15.5 +15 ;
// echo $number ;


// $number = 15.5  . 15 ;
// echo $number ;



/////////////////////////////////////////////////////////////////////////////////////////////
/**If statement */

// $age = 10 ;
// $gender = "male";

// if($age >= 18){
//     echo "you can register <br>";
//     if($gender == "female"){
//     echo "welcome <br>";
// }
// }

// else{
//     echo "kkk";
// }

// if($age > 18){
//     echo "you can register";
// }else{
//     echo "sorry you can`t";
// }




/****short if */
// $x =   $age > 18 ? "you can register" : "sorry you can`t" ;
//   echo $x ;









// $age = 10 ;
// $gender = "male"; 
// if($gender == "female"){
//     echo "welcome";
// }else{
//     echo "invalid";
// }

// if(""){
//     echo "enter";
// }
/**
 * ""  ||  ''   false   0
 * " "  || ' ' true
 * 
 */




// $age = 10 ;
// $gender = "male"; 
// if($gender = "female"){
//     echo "welcome";
// }else{
//     echo "invalid";
// }

/**
 * = assignment
 * ==   value
 * === vale datatype
 */

// $x = 10 ;  //int
// $y = "10";  //string

// if($x === $y){
//     echo "equal";
// }
// else{
//     echo "not equal";
// }


$age = 20;
$gender = "male";
$is_active = true;
//    true   &&    false =>false          &&   true   =>  false
// if($age > 15 && $gender == "female" && $is_active == true){
//     echo "enter";
// }

//     true   || false => true    || true  =>true
//     true   || false => true    || false  =>true
// if($age > 15 || $gender == "female" || $is_active == false){
//     echo "enter";






//     $a = 5;
// //   false   ||   false||   false||   true   ||   false ||  false    =>true
// if ($a == 2 || $a == 3 || $a == 4 || $a == 5 || $a == 6 || $a == 7) {
//   echo "$a is a number between 2 and 7";
// }





$day = 1;
// if ($day == 1) {
//     echo "Saturday";
// } elseif ($day == 2) {
//     echo "sunday";
// } elseif ($day == 3) {
//     echo "monday";
// } elseif ($day == 4) {
//     echo "thursday";
// } elseif ($day == 5) {
//     echo "wednesday";
// } elseif ($day == 6) {
//     echo "tu";
// } elseif ($day == 7) {
//     echo "fri";
// } else {
//     echo "invalid";
// }


/////////////////////////////////////////
/**Switch */

// switch ($day) {
//     case 1:
//         echo "Saturday";
//         break;

//     case 2:
//         echo "sunday";
//         break;


//     case 3:
//         echo "monday";
//         break;


//     case 4:
//         echo "thursday";
//         break;


//     case 5:
//         echo "wednesday";
//         break;

//     case 6:
    
//         echo "tu";
//         break;
//     case 7:
//         echo "fri";
//         break;

//     default:
//         echo "invalid";
// }




// $fruit = 'tomato';

// switch($fruit){
//     case "apple" :
//         echo "this ia a Fruit" ;
//         break ; 

//           case "orange" :
//         echo "this ia a Fruit" ;
//         break ; 

//           case "carrot" :
//         echo "this ia a vegetable" ;
//         break ; 

//           case "tomato" :
//         echo "this ia a vegetable" ;
//         break ; 

//         default :
//         echo "invalid";

// }

/**DRY   don`t repeat your self */

// $fruit = 'apple';
// switch($fruit){
//     case "apple" :
//     case "orange" :
//         echo "this ia a Fruit" ;
//         break ; 

//           case "carrot" :
//           case "tomato" :
//              echo "this ia a vegetable" ;
//              break ; 

//         default :
//         echo "invalid";

// }



//////////////////////////////////////////////////////////////

// if(true):

//     echo "welcome" ;

// endif;


//////////////////////////////////////////////////////////
/**          Assignment Operators    */

// $x =  10 ;
// $x += 20 ;
// echo $x ;


/////////////////////////////////////////////////////////////////
/**Increment       
 * Pre-increment  ++$i
 * Post-increment   $i++
 */

// $i = 5 ;
// echo $i++ ;  // 5
// echo $i ;

////////////////////////////
// $i = 5 ;
// echo ++$i ;  // 6
// echo $i ;
// $i = 5;
// //    5    2    7   =>14
// $y = $i++ + 2 + ++$i ;
// echo $y ;


//////////////////////////////

// $a = 10 ;
// $b = ++$a ;  // 10    11

// echo $a ."<br>" ;  //10   11 
// echo $b ."<br>" ;   //10   10


/////////////////////////////////////
// $x = 6 ; //7  8
// //    6   + 4  + 7  +  3 + 9   29
// $y = $x++ + 4 + $x++ + 3 + ++$x ;
// echo $y ;



/////////////////////////////////// LOOPS   ///////////////////////////////////////////////
/**
 * for
 * while
 * do while
 * foreach  => array
 */


////////////////////for///////////////////////////

// for(  ;    ;  ){   infinite loop
//   echo "welcome  <br>";
// }



// for($i=0 ; $i<= 10 ; $i++){
//     echo "welcome PHP   $i <br>";
// }


////////////////////// while ///////////////////////////////

// $i=0 ;

// while($i<= 10){
//    echo "welcome PHP   $i <br>"; 
//    $i++;
// }


// $correctPin = 1278 ;
// $enterPin = null;

// while($correctPin != $enterPin){
//     echo "please enter your pin";
//     $enterPin = 1278;
// }


/////////////////////////////////////do while  ///////////////////////////////
// $age = 18;
// while($age >20){
//     echo "enter";

// }

// $age = 18;
// do{
//     echo "enter"; 
// }while($age >20);

//////////////////////////////////////////////////////////////////////////////
/**two words 
 * break
 * continue
 * 
 */

// for($i = 1 ; $i<=10 ; $i++){
//     //  echo $i ."<br>";
//     if($i== 5 ){
//      continue ;
//     }
//      echo $i ."<br>";
// }


/** 1234  BOOM   6789 BOOM 11 12 13 14 BOOM                                */

for($i = 1 ; $i<=50 ; $i++){
    //  echo $i ."<br>";
    if($i % 5 == 0 ){
         echo "BOOM <br>";
     continue ;
    
    }
     echo $i ."<br>";
}
