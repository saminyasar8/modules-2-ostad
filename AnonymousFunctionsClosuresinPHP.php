<?php 
//ananymous function

//  $sayHello = function ($name){
//     echo "hello $name";
//  };
//  $sayHello("samin");

//closures function

function sayHello($name){
    //calculation
    //other process
    //fetch
    //

    // function returnOutput($name){
    //     echo"hello $name";
    // }
    // return returnOutput($name);

//better way
   return function () use ($name) {
    return"hello $name";
   };

}
 $said=  sayHello("samin");
 echo $said();