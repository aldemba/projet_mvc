<?php
define("ROLE_JOUEUR","role_joueur");
define("ROLE_ADMIN","role_admin");
function is_connect(){
    return (isset($_SESSION[KEY_USER_CONNECT]));
}

function is_joueur(){
    return is_connect() && $_SESSION[KEY_USER_CONNECT]['role'] = ROLE_JOUEUR;
}

function is_admin(){
    return is_connect() && $_SESSION[KEY_USER_CONNECT]['role'] = ROLE_ADMIN;
}