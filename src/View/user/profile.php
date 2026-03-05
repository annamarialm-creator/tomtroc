<?php require __DIR__ . '/../layout/header.php'; ?>
<?php require_once __DIR__ . '/../../helpers/date_helper.php'; ?>

<div class="profile-container">

    <!-- LEFT PROFILE CARD -->
    <div class="account-profile">

        <img src="https://via.placeholder.com/120" alt="Photo de profil">

        <h3><?= htmlspecialchars($user['username']) ?></h3>

        <p>Membre depuis <?= getMembershipDuration($user['created_at']) ?></p>

        <h3>BIBLIOTHEQUE</h3>

        <p><?= count($books) ?> livres</p>

        <a href="#" class="message-button">Écrire un message</a>

    </div>


    <!-- RIGHT BOOK LIST -->
    <div class="account-books">

        <table border="1">

            <tr>
                <th>PHOTO</th>
                <th>TITRE</th>
                <th>AUTEUR</th>
                <th>DESCRIPTION</th>
            </tr>

            <?php foreach ($books as $book): ?>

                <tr>

                    <td>
                        <?php if ($book['image']): ?>
                            <img src="<?= htmlspecialchars($book['image']) ?>" width="60">
                        <?php else: ?>
                            —
                        <?php endif; ?>
                    </td>

                    <td><?= htmlspecialchars($book['title']) ?></td>

                    <td><?= htmlspecialchars($book['author']) ?></td>

                    <td><?= htmlspecialchars($book['description']) ?></td>

                </tr>

            <?php endforeach; ?>

        </table>

    </div>

</div>

<?php require __DIR__ . '/../layout/footer.php'; ?>