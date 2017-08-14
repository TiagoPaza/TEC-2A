<?php
    $alcool = 2.560;
    $gasolina = 3.800;

    $valor = $gasolina * 0.7;
    
    if($valor > $alcool){
        echo "Abasteça com alcool";
    }
    else{
        echo "Abasteça com gasolina";
    }
?>