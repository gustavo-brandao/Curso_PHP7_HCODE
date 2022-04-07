<?php

$empresa = "Hcode";

$empresa = str_replace("o", "0", $empresa); //1o parâmetro - o que vai trocar, 2o parâmetro - pelo o que vai trocar, 3o parâmetro - em qual variável
$empresa = str_replace("e", "3", $empresa);

echo $empresa;

?>