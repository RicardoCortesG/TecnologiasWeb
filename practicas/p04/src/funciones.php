<?php

function multiplo5y7($numero) {
    if($numero%5==0 && $numero%7==0){
        echo "El numero $numero es multiplo de 5 y de 7";
    } 
    elseif($numero%5!=0 && $numero%7!=0){
        echo "El numero $numero no es multiplo de 5 ni de 7";
   }
    else{
        if($numero%5==0){
            echo "El numero $numero es mutiplo de 5";
        }
        elseif($numero%7==0){
            echo "El numero $numero es multiplo de 7";
        }
    }
    
}

?>