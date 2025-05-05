<?php

spl_autoload_register(function ($classe) {
  // Convertir le namespace en chemin de fichier
  $classe = ltrim($classe, '\\');
  $file = __DIR__ . '/../' . str_replace('\\', '/', $classe) . '.php';

  // Vérifier si le fichier existe et l'inclure
  if (file_exists($file)) {
    require_once $file;
  }
});
