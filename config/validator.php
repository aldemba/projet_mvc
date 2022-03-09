<?php
function champ_obligatoire(string $key,string $data,array &$errors,string $message="ce champ est obligatoire"){
    if(empty($data)){
        $errors[$key]=$message;
    }
}
function valid_email(string $key,string $data,array &$errors,string $message="email invalide"){
    if(!filter_var($data,FILTER_VALIDATE_EMAIL)){
        $errors[$key]=$message;
    }
}

function valid_password(string $key,string $data,array &$errors,string $message="password invalid"){
    if(verify_password($data)){
        $errors[$key]=$message;
    }
}

function verify_password($password):bool{
    $number = preg_match('@[0-9]@', $password);
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    if(strlen($password) < 6 || !$number || !$uppercase || !$lowercase){
        return true;
    }
    return false;
}