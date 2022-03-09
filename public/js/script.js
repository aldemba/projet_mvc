const forme = document.getElementById('form-connect');
const login = document.getElementById("login");
const password = document.getElementById("password");
const small = document.querySelectorAll('small');
const btn = document.querySelector('button');

//===================== Fonctions ===========================

//Tester si l'email est valide
function checkEmail(input){
    const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (re.test(input.value.trim().toLowerCase())) {
        return true;
    }else{
        return false;
    }
}

const isPasswordSecure = (password) => {
    const re = new RegExp("(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.{6,})");
    if(re.test(password.value)){
        return true;
    }else{
        return false;
    }
};

//======================= Evenements =========================

login.onkeyup=function(){
    if(checkEmail(login)){
        login.parentElement.style.border="4px solid green";
    }else{
        login.parentElement.style.border="4px solid red";
    }
}

password.onkeyup=function(){
    if(isPasswordSecure(password)){
        password.parentElement.style.border="4px solid green";
    }else{
        password.parentElement.style.border="4px solid red";
    }
}

