<?php

function prime($number){
    if($number<=1){
        return false;
    }
    for ($j = 2; $j <= sqrt($number); $j++) {
        if ($number % $j == 0) {
            return false;
        }
    }
    return true;
}

function allPrimesUpToNumber($array){
    $result=[];
    foreach($array as $number){
        for($i=1;$i<=$number;$i++){
            $primes=[];
            if (prime($i)){
                array_push($primes,$i);
            }
            $result[$number]=$primes;
        }
    }
    return $result;

}

?>