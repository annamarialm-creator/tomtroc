<?php require __DIR__ . '/../layout/header.php'; ?>

<h1>Inscription</h1>

<form method="POST" action="?route=register">

    <label for="username">Pseudo</label>
    <input type="text" id="username" name="username" required>

    <label for="email">Adresse email</label>
    <input type="email" id="email" name="email" required>

    <label for="password">Mot de passe</label>
    <input type="password" id="password" name="password" required>

    <button type="submit">S'inscrire</button>

    <p>
        Déjà inscrit ?
        <a href="?route=login">Connectez-vous</a>
    </p>

</form>

<?php require __DIR__ . '/../layout/footer.php'; ?>