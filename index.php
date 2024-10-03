<?php
    // $x = 5;

    // function variablat(){
    //     $y = 3;
        
    //     echo $y;
    // }
    // variablat();
    
    // echo "\n, $x"
/*     $x = 6;
    $y = 2;

    function sum(){
        global $x,$y;
        $x = $x +$y;
    }
    sum();
    echo $x; */
    // function test(){
    //     static $x = 1;
    //     echo $x;
    //     $x++;
    // }
    // test();
    $fastfoods = array("Burger", 'Pizza', 'Toast', 'Sandwich');

    // echo $fastfoods[2];
    // echo end($fastfoods);
    // echo count($fastfoods);
    $len = count($fastfoods);
    
    for ($i=0; $i < $len ; $i++) { 
        echo $fastfoods[$i];
    }
    


?>