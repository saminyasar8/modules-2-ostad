<?php
//callback functiom

// function sayHello( $name){
// return "hello $name\n";

// }
// function greetAll( callable $callbackfunction,  array  $names) { 
//     $results =[];
//     foreach( $names as $name) {
//         $results[] = $callbackfunction($name);

//         // sayHello( $name );
//     }
//     return $results;

// }

//  $allGreetings  =  greetAll( 'sayHello',["panda",'fox','cat']);
//  var_dump( $allGreetings ); 

//recursive function

function factorial($n) {
    if ($n <= 0) {
        return 1;
    }
    return $n * factorial($n -1);

}
echo factorial(2);
// 2! : 2*(2-1)*(1-1) 0=1
//3! : 3*(3-1) 2*(1-1) 0=1
  