<?php

define("N", 45);

for($i=1; $i<=N; $i++){
    if(($i % 3 == 0) && ($i % 5 ==0)){
        echo $i. ": FIZZBUZZ\n";
    }else if($i % 5 ==0){
        echo $i. ": BUZZ\n";
    }else if($i % 3 == 0){
        echo $i. ": FIZZ\n";
    }
}