<?php

$nome = "joao rangel";

$nome =  strtoupper($nome);

echo $nome;

$nome = strtolower($nome);

echo "<br>";

echo $nome;

echo "<br>";

echo ucwords($nome); //primeira letra de cada palavra vai ficar maiúscula

echo "<br>";

echo ucfirst($nome); //só a primeira letra fica maiúscula

?>