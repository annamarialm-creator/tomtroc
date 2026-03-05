<?php require __DIR__ . '/../layout/header.php'; ?>

<h1>Connexion</h1>

<form method="POST" action="?route=login">

    <label for="email">Adresse email</label>
    <input type="email" id="email" name="email" required>

    <label for="password">Mot de passe</label>
    <input type="password" id="password" name="password" required>

    <button type="submit">Se connecter</button>

    <p>
        Pas de compte ?
        <a href="?route=register">Inscrivez-vous</a>
    </p>

</form>

<?php require __DIR__ . '/../layout/footer.php'; ?>