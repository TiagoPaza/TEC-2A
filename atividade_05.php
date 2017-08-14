<?php 
    $A = 5.0;
    $B = 9.0;
    $C = 7.2;
    $D = 6.8;

    $media = ($A + $B + $C + $D)/4;
        
    if($media > 7.0){
        echo "O aluno ficou com: $media e está aprovado";
    }
    if($media > 5.0 && $media < 6.9){
        echo "O aluno ficou com: $media e está em recuperação";
    }
    if($media < 5.0){
        echo "O aluno ficou com: $media e está reprovado";
    }
?>