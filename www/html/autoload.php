<?php

/** PSR-4 Autoloading
 *
 * Cette fonction permet, lorsqu'on utilise une classe, de charger le fichier
 * correspondant automatiquement.
 *
 * Le système va appeler la fonction enregistrée ci-après en lui passant le
 * nom de la classe en paramètre. La fonction va alors transformer ce nom
 * de classe en nom de fichier puis opérer l'inclusion de ce dernier.
 *
 * Par exemple, si le code exécuté contient une ligne de ce genre :
 *
 * ```php
 * $pdo = \Dal\Dao::getInstance() ;
 * ```
 *
 * La fonction sera appelée et le fichier `classes/Dal/Dao.php` sera inclu,
 * la classe sera alors disponible et le code pourra être exécuté normalement.
 *
 */

spl_autoload_register(function ($classname) {

  $filename = dirname(__DIR__) . DIRECTORY_SEPARATOR
    . "classes"        . DIRECTORY_SEPARATOR
    . str_replace("\\", DIRECTORY_SEPARATOR, $classname)
    . ".php";

  if (is_file($filename)) {
    require $filename;
  }
});
