<?php
// nested for

for ($i =1; $i <=5; $i++){
    echo "$i\n";
    
    for ($j =1; $j <=5; $j++){
    echo " $i * $j : ".$i *$j . "<br>" ."\n";
    }
    echo "\n";
}

// nested foreach

$students = [
    ['name' => 'jone done' , 'age' => 20],
    ['name' => 'jone done' , 'age' => 21],
    ['name' => 'jone done' , 'age' => 22],
];





foreach($students as $student) {
    foreach ($student as $key => $value){
        echo "$key : $value \n";  
    }
    echo "\n";
}