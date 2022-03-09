<?php
require_once(PATH_SRC."models".DIRECTORY_SEPARATOR."user.modeles.php");
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if (isset($_REQUEST['action'])) {
        if($_REQUEST['action'] == "connexion"){
            $login = $_POST['login'];
            $password = $_POST['password'];
            connexion($login,$password);
        }
    }else{
    }
}

if($_SERVER["REQUEST_METHOD"] == "GET"){
    if (isset($_REQUEST['action'])) {
        if($_REQUEST['action'] == "connexion"){
            require_once(PATH_VIEWS."securite".DIRECTORY_SEPARATOR."connexion.html.php");
        }elseif($_REQUEST['action'] == "deconnexion"){
            logout();
        }elseif($_REQUEST['action']=="inscription"){
            require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."inscription.html.php");
        }
    }else{
        require_once(PATH_VIEWS."securite".DIRECTORY_SEPARATOR."connexion.html.php");
    }
}
// fonctions 
function connexion(string $login, string $password):void{
    $errors = [];
    champ_obligatoire('login',$login,$errors,"login obligatoire");
    if(count($errors) == 0){
        valid_email('login',$login,$errors);
    }
    champ_obligatoire('password',$password,$errors,"Mot de passe obligatoire");
    if(count($errors) == 0){
        valid_password("password",$password,$errors,"Revoir votre password");
        // Appel d'une focntion de models
        $user = find_user_login_password($login,$password);

        if(count($user) != 0){
            // cas où l'itilisateur existe
            $_SESSION[KEY_USER_CONNECT] = $user;
            header('location:'.WEB_ROOT."?controller=user&action=accueil");
            exit();
        }else{
            // l'utilisateur n'existe pas
            $errors['connexion'] = "Login ou mot de passe incorrect !";
            $_SESSION[KEY_ERROR] = $errors;
            header("location:".WEB_ROOT);
            exit();
        }
    }else{
        $_SESSION[KEY_ERROR] = $errors;
        header('location:'.WEB_ROOT);
        exit();
    }
}
function logout(){
    session_destroy();
    header('location:'.WEB_ROOT);
    exit();
}
