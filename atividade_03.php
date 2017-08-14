<?php 
    $A = 60;
    $B = 100;
    $C = 20;
    $D = 80;

    $soma = $A + $D;
    echo "A soma é: $soma";
    
    $divisao = $B / $C;
    echo "A dvisão é $divisao";
    
    if($soma > $divisao){
        echo "A soma é maior que a divisão<br/>";
    }
    if($soma < $divisao){
        echo "A soma é menor que a divisão<br/>";
    }
    else{
        "A soma é igual a divisão";
    }
?>