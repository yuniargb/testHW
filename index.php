<?php
function checkNum($x){
    for($i = 1; $i <= $x; $i++){
        if($i % 3 == 0 && $i % 5 == 0 ){
            echo "TigaLima";
        }else if($i % 3 == 0){
            echo "Tiga";
        }else if($i % 5 == 0){
            echo "Lima";
        }else{
            echo $i;
        }
        echo "<br/>";
    }
}

checkNum(100);