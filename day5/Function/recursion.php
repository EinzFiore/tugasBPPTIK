<?php 
    function bilangan($bilangan){
        if($bilangan % 3 == 0){
            echo "bilangan $bilangan adalah bilangan ganjil";
        }
        else if($bilangan % 2 == 0){
            echo "bilangan $bilangan adalah bilangan genap";
        }
        else if($bilangan > 20){
            echo $bilangan;
        }
        else return bilangan($bilangan + 1);
    }
?>