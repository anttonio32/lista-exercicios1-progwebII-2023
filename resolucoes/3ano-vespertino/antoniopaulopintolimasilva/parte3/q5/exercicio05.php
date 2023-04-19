<?php
    $divida = 5000;
    $juros = 2/100;  
    $mensal = 200;
    
    $i =0;

    while($divida > $i){
        $divida += ($divida * $juros) - $mensal;
        $i++;
    }
   
   
    
    echo "$i";
?>