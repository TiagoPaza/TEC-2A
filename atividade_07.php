<?php
    $altura = 1.76;
    $sexo = "M";
    
    if ($sexo = "M"){
        $imc = (72.7 * $altura) - 58;
    }
    if ($sexo = "F"){
        $imc = (62.1 * $altura) - 44;
    }
    echo "O IMC é: $imc";
?>