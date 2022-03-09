
<div id="container-inscription">

    <div id="gauche" >

            <div id="entete-inscription">
                <h1>S'INSCRIRE</h1>
                <span id="span-ins">Pour tester votre niveau de culture générale</span>
                <hr>
            </div>

            <form action="" id="form-ins">
                <label for="" class="label-inscription">Prénom</label>
                <input type="text"  name="" id="prenom" class="text">

                <label for="nom" class="label-inscription"> Nom</label>
                <input type="text" name="" id="nom" class="text">

                <label for="" class="label-inscription">Login</label>
                <input type="text" name="" id="email" class="text">

                <label for="" class="label-inscription">Password</label>
                <input type="password" name="" id="password1" class="pass">

                <label for="" class="label-inscription">Confirmer Password</label>
                <input type="password" name="" id="password2" class="pass">

                <div id="fichier"> 
                    <span id="avatar"> Avatar</span>
                    <label for="file" id="choix">Choisir un fichier</label>
                    <input type="file" id="file">
                </div>

                <button id="inscription">Créer compte</button>
                
            </form>

    </div>

    <div id="droite">
        <div id="logo-ins">
        <img src="<?= WEB_ROOT.'images/avatar.jpg' ?>" id="icone" srcset="" alt="" width="250px" height="280px" >
        </div>
       <h2 id="h2-ins">Avatar du joueur</h2>
    </div>

</div>
<?php
require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."footer.inc.html.php");
?>
