<?php
    $divida = 5000;
    $juros = 2;  
    $mensal = 200;
    
    $i = 0 ;
      while($i <= $divida){
        $divida += ($divida * ($juros/100));
        $divida -= $mensal;
        $i++;
      }
      
    echo $i;
    echo "<br>";

    echo $divida;
    
    
?>