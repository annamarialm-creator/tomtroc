<?php require __DIR__ . '/../layout/header.php'; ?>
<?php require_once __DIR__ . '/../../helpers/date_helper.php'; ?>

<h1>Mon compte</h1>


<!-- TOP SECTION -->
<div class="account-top">

    <!-- PROFILE CARD -->
    <div class="account-profile">

        <img src="https://via.placeholder.com/120" alt="Photo de profil">

        <p><a href="#">Modifier</a></p>

        <h3><?= htmlspecialchars($user['username']) ?></h3>

        <p>Membre depuis <?= getMembershipDuration($user['created_at']) ?></p>

        <h3>BIBLIOTHEQUE</h3>

        <p><?= count($books) ?> livres</p>

    </div>


    <!-- ACCOUNT FORM -->
    <div class="account-details">

        <h2>Vos informations personnelles</h2>

        <form method="POST" action="?route=update-profile">

            <label for="email">Adresse email</label>
            <input
                type="email"
                id="email"
                name="email"
                value="<?= htmlspecialchars($user['email']) ?>">

            <label for="password">Mot de passe</label>
            <input
                type="password"
                id="password"
                name="password"
                placeholder="••••••••">

            <label for="username">Pseudo</label>
            <input
                type="text"
                id="username"
                name="username"
                value="<?= htmlspecialchars($user['username']) ?>">

            <button type="submit">Enregistrer</button>

        </form>

    </div>

</div>


<!-- BOOK LIBRARY -->
<div class="account-books">

    <a href="?route=create-book">Ajouter un livre</a>

    <table border="1">

        <tr>
            <th>PHOTO</th>
            <th>TITRE</th>
            <th>AUTEUR</th>
            <th>DESCRIPTION</th>
            <th>DISPONIBILITE</th>
            <th>ACTION</th>
        </tr>

        <?php foreach ($books as $book): ?>

            <tr>

                <td>
                    <?php if ($book['image']): ?>
                        <img src="<?= htmlspecialchars($book['image']) ?>" width="50">
                    <?php else: ?>
                        —
                    <?php endif; ?>
                </td>

                <td><?= htmlspecialchars($book['title']) ?></td>

                <td><?= htmlspecialchars($book['author']) ?></td>

                <td><?= htmlspecialchars($book['description']) ?></td>

                <td>
                    <?= $book['status'] === 'available' ? 'Disponible' : 'Indisponible' ?>
                </td>

                <td>
                    <a href="?route=edit-book&id=<?= $book['id'] ?>">Éditer</a> |
                    <a
                        href="?route=delete-book&id=<?= $book['id'] ?>"
                        onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce livre ?');">
                        Supprimer
                    </a>
                </td>

            </tr>

        <?php endforeach; ?>

    </table>

</div>


<a href="?route=logout">Se déconnecter</a>

<?php require __DIR__ . '/../layout/footer.php'; ?>