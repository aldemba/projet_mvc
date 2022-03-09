
<?php 
   
    if(isset($_SESSION[KEY_ERROR])){
        $errors = $_SESSION[KEY_ERROR];
        unset($_SESSION[KEY_ERROR]);
    }
?>
    <form action="<?= WEB_ROOT ?>" method="POST" id="form-connect" >
        <div class="entete">
            <h3>Login Form</h3><span class="lienX"><a href="#"><i class="fa fa-close" style="font-size:30px"></i></a></span>
        </div>
        <div class="bloc">

            <input type="hidden" name="controller" value="securite">
            <input type="hidden" name="action" value="connexion">
            <div class="champ">
                <input type="text" name="login" id="login">
                <img src="<?= WEB_ROOT.'images'.DIRECTORY_SEPARATOR.'Icônes'.DIRECTORY_SEPARATOR.'ic-login.png' ?>" class="icone" srcset="">
            </div>
            <div class="div-erreur">
            <?php if(isset($errors['login'])) : ?>
                <small style="color: red;">
                    <?= $errors['login']; ?> 
                </small>
            <?php endif ?>
            </div>
            <div class="champ">
                <input type="password" name="password" id="password">
                <img src="<?= WEB_ROOT.'images'.DIRECTORY_SEPARATOR.'Icônes'.DIRECTORY_SEPARATOR.'ic-password.png' ?>" class="icone" srcset="">
            </div>
            <div class="div-erreur">
                <?php if(isset($errors['password'])) : ?>
                    <small style="color: red;">
                        <?= $errors['password']; ?>
                    </small>
                <?php endif ?>
            </div>
            <div class="bas">
                <button type="submit" id="bouton-connect">Connexion</button>
                <span><a href="<?= WEB_ROOT.'?controller=securite&action=inscription' ?>" class="inscrire">S'inscrire pour jouer ?</a></span>
            </div>

        </div>
    </form>
<?php
    require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."footer.inc.html.php");
?>