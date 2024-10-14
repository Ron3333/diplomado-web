<?php

for($i=0; $i <= 20; $i++){

    if($i == 11){
        break;
    }
    echo $i."<br>";
}

echo "RUN";

for($i=0; $i <= 20; $i++){

    if($i == 7){
        continue;
    }
    echo $i."<br>";
    
}



?>