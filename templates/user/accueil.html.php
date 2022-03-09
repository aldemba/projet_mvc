

<div action="" class="section">

<div class="entete">
    <span></span>
    <h1>Créer et paramètrer vos quizz</h1>
    <span><a href="<?= WEB_ROOT.'?controller=securite&action=deconnexion' ?>">Deconnexion</a></span>
</div>

<div class="corps">

    <div class="avatar">
        <div class="entete-avatar">
            <div id="img-avatar">
                <img src="<?= WEB_ROOT.'images/Icônes/images.jpeg'?>" alt="" srcset="">
            </div>
            <span>Prénom Nom</span>
        </div>
        <div>

            <div class="element-avatar">
                <a href="#">Listes Questions</a>
                <img src="<?= WEB_ROOT.'images/Icônes/ic-liste.png'?>" alt="Icone-liste">
            </div>

            <div class="element-avatar">
                <a href="<?= WEB_ROOT.'?controller=user&action=creer.admin'?>">Créer Admin</a>
                <img src="<?= WEB_ROOT.'images/Icônes/ic-ajout.png'?>" alt="ajouter">
            </div>

            <div class="element-avatar">
                <a href="<?= WEB_ROOT.'?controller=user&action=liste.joueur'?>">Listes joueurs</a>
                <img src="<?= WEB_ROOT.'images/Icônes/ic-liste-active.png'?>" alt="joueurs">
            </div>

            <div class="element-avatar">
                <a href="#">Créer Questions</a>
                <img src="<?= WEB_ROOT.'images/Icônes/ic-ajout.png'?>" alt="question">
            </div>

        </div>
    </div>

    <div class="div-dynamic">

        <?= isset($showLayout) ? $showLayout : "" ?>
        <?= isset($admin) ? $admin : "" ?>

    </div>

</div>

</div>
