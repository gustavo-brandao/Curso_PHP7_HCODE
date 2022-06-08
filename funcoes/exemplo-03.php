<?php

function ola($texto = "Mundo", $periodo){
    return "Olá $texto! $periodo!<br>";
}
echo ola("", "Bom dia");
echo ola("", "Boa noite!");
echo ola("Gustavo", "Boa tarde!");
echo ola("texto", "");
?>