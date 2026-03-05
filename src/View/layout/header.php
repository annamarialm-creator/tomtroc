<header>

<nav class="main-nav">

    <!-- LOGO -->
    <div class="nav-logo">
        <a href="?route=home">Tom Troc</a>
    </div>


    <!-- MAIN NAVIGATION -->
    <div class="nav-main">

        <a href="?route=home">Accueil</a>

        <a href="?route=books">Nos livres à l’échange</a>

    </div>


    <!-- USER AREA -->
    <div class="nav-user">

        <a href="#">Messagerie</a>

        <?php if (isset($_SESSION['user_id'])): ?>

            <a href="?route=account">Mon compte</a>

            <a href="?route=logout">Déconnexion</a>

        <?php else: ?>

            <a href="?route=login">Connexion</a>

        <?php endif; ?>

    </div>

</nav>

</header>