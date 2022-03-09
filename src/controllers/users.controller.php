<?php
require_once(PATH_SRC."models".DIRECTORY_SEPARATOR."user.modeles.php"); 

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if (isset($_REQUEST['action'])) {
        if($_REQUEST['action'] == "connexion"){
            echo "charger la page de connexion";
        }
    }
}

if($_SERVER["REQUEST_METHOD"] == "GET"){
    if (isset($_GET['action'])){
        if (!is_connect()){
            header('location:'.WEB_ROOT);
            exit();
        }
        
        if($_GET['action'] == "accueil"){
            require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."accueil.html.php");
        }elseif($_GET['action']=="liste.joueur"){
            lister_joueur();
        }elseif($_GET['action']=="creer.admin"){
            creer_admin();
        }
    }
}
function lister_joueur(){
    //Appel du Modele
    ob_start();
    $data = find_users(ROLE_JOUEUR);
    require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."liste.joueurs.html.php"); 
    $showLayout = ob_get_clean();
    require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."accueil.html.php"); 
}

function creer_admin(){
    ob_start();
    require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."inscription.html.php");
    $admin=ob_get_clean();
    require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."accueil.html.php");

}
