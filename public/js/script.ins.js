const form = document.getElementById('form-ins');
const prenom = document.getElementById('prenom');
const nom = document.getElementById('nom');
const loginInscript = document.getElementById('email');
const password1 = document.getElementById('password1');
const password2 = document.getElementById('password2');
var lettre = /^[A-Za-z]+$/;
var number = /^[0-9]+$/;
var size = /^[?=.{6,}]+$/;

//Tester si l'email est valide
function checkEmail(input){
    const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (re.test(input.value.trim().toLowerCase())) {
        return true;
    }
}
//============================ Evenment ==============================

loginInscript.onkeyup=function(){
    if(checkEmail(loginInscript)){
        loginInscript.style.border="2px solid green";
    }else{
        loginInscript.style.border="2px solid red";
    }
}

prenom.onkeyup= function() {
    if(!lettre.test(prenom.value) || checkLength(prenom,2)){
        prenom.style.border= "2px solid red";
    }else{
        prenom.style.border="2px solid green";
    }
}

nom.onkeyup= function() {
    if(!lettre.test(nom.value) || checkLength(nom,2)){
        nom.style.border= "2px solid red";
    }else{
        nom.style.border="2px solid green";
    }
}

function checkLength(input, min){
    if (input.value=="" || input.value.length < min) {
        return true;
    }
};

password1.onkeyup=function(){
    if(lettre.test(password1.value) || number.test(password1.value) || size.test(password1.value)){
        password1.style.border="2px solid red";
    }else{
        password1.style.border="2px solid green";
    }
}


function checkPassword(pass1,pass2){
    if (pass1.value!=pass2.value){
        return true     
    }
}

password2.onkeyup=function(){
if(checkPassword(password1,password2)){
    password2.style.border="2px solid red";
}else{
    password2.style.border="2px solid green";
}

}

