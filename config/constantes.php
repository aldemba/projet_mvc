<?php
// définition de la constante qui pointe sur le dossier racine du projet
define('ROOT',str_replace('public'.DIRECTORY_SEPARATOR.'index.php','',$_SERVER['SCRIPT_FILENAME']));

// constante qui pointe vers le src
define("PATH_SRC",ROOT."src".DIRECTORY_SEPARATOR);

// constante qui pointe vers le dossier config
define("PATH_VIEWS",ROOT."templates".DIRECTORY_SEPARATOR);

// constante qui pointe vers le fichier json
define("PATH_DB",ROOT."data".DIRECTORY_SEPARATOR."db.json");

// constante pour nous rediriger vers le front contrôleur c'est à dire le fichier index
define("WEB_ROOT","http://localhost:8002/");

// Cle d'erreurs
define("KEY_ERROR","error");

// Cle d'acces à l'utilisateur connecté
define("KEY_USER_CONNECT","user-connect");
