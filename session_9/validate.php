<?php


$validates = [

'username'=>[
    'filters' => FILTER_VALIDATE_REGEXP ,
    'my_options'=>['options'=> ['regexp'=>'/^[A-Z][a-z]{3,8}$/'] ] ,
     'error'=> "invalid user name"
],

'password'=>[
    'filters' => FILTER_VALIDATE_REGEXP ,
    'my_options'=>['options'=> ['regexp'=>'/[0-9a-z]{3,8}$/'] ] ,
     'error'=> "invalid password"
],

'age'=>[
    'filters' => FILTER_VALIDATE_INT ,
    'my_options'=>['options'=> ['min_range'=>16  , 'max_range'=>30] ] ,
     'error'=> "invalid age"
],

'email'=>[
    'filters' => FILTER_VALIDATE_EMAIL ,
     'error'=> "invalid email"
],

];


