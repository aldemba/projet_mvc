<?php
if(isset($_REQUEST['controller'])){
    switch($_REQUEST['controller']){
        case "securite" :
            require_once(PATH_SRC."controllers/securite.controller.php");
            break;
            case "user":
                require_once(PATH_SRC."controllers/users.controller.php");
        break;
    }
}else{
    require_once(PATH_SRC."controllers/securite.controller.php"); 
}

