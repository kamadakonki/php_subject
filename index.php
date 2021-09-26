<?php

//1.
for($count = 1; $count <= 100; $count++){
        if ($count % 3 === 0 && $count % 5 === 0){
            echo 'FizzBuzz'.'<br>';
        }else if($count % 5 === 0){
            echo 'Buzz'.'<br>';
        }else if($count % 3 === 0){
            echo 'Fizz'.'<br>';
        }else{
            echo $count.'<br>';
        }
}

//2.
for ($i = 1; $i <= 10000; $i++){
    $point = 0;

    for ($j = 1; $j <= $i; $j++){
        if($i % $j == 0){
            $point += 1;
        }
    }

    if ( $point == 2){
        echo $i.'<br>';
    }
}

//3.
$days = array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');

foreach($days as $number => $day){
    echo $number.":".$day."<br>";
};


?>