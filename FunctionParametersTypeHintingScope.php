<?php
//type hinting function

// function sowMyHeight(float $height) {
//     return "I am $height f.t tall";

// }
// echo sowMyHeight(height:5.6) ;

//variable scope function

$name = "panda";
function  hello (){
    global $name;
    echo "hello $name";
}
  hello ();
