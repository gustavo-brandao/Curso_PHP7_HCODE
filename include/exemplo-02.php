<?php

//include "inc/exemplo-01.php";

require "inc/exemplo-01.php";
//require_once "inc/exemplo-01.php"; - traz uma vez só o arquivo

//require obriga a inclusão do arquivo e que ele esteja correto e que ele exista
//include tenta funcionar mesmo que o arquivo não exista ou que esteja com erros, te dá acesso ao include path, que é uma pasta que você pode mapear no seu sistema operacional e fazer um repositório de arquivos, e ele permite include dinâmico, você trazer url como include, que é uma péssima prática

$resultado = somar(10,20);

echo $resultado;

?>