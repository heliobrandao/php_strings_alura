<?php

spl_autoload_register(function ($classe){

  $prefixo = "App\\";

  $diretorio - __DIR__ . '/src/';

  if (strncmp($prefixo, $classe, strlen($prefixo)) !== 0) {
    return;
  }

  // "App\Alura\Usuario"

  $namespace = substr($classe, strlen($prefixo));

  $namespace_arquivo = str_replace('\\', DIRECTORY_SEPARATOR, $namespace);

  $arquivo = $diretorio . $namespace_arquivo . '.php';

  var_dump($arquivo);
});