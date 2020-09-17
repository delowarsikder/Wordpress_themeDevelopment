<?php

    $end="<br>";
    echo "Hello world";
    $x = 4;
    echo "<br>",$x;
    //concatenation text
    $s="today i learn";
    $y=" php";
    echo "<br>".$s. $y;
    //add value
    $m=45;
    $sum=$x+$m;
    echo $end.$sum.$end;
    //check differend between single and double   qoute
    echo "check differend between single and double   qoute".$end;

    $p=10;
    echo "p is single qoute ".'$p'.$end;//print all in single qoute
    echo "p is double qoute "."$p".$end;//print value of p variable
    echo "check data type in php".$end;
    //check data type
    var_dump($sum).$end;//just print data type with value
    var_dump($s).$end;//for string print no of charecter and string

    //arry in php
    echo $end."array in php".$end;

    $color=array("red","green","blue");
    //loop in php

    for ($i=0; $i <count($color) ; $i++) { 
        # code...
        echo($color[$i]).$end;
    }

?>