<?php require __DIR__ . '/../layout/header.php'; ?>
<?php require_once __DIR__ . '/../../helpers/date_helper.php'; ?>

<h1>Nos livres à l’échange</h1>

<form method="GET" action="">
    <input type="hidden" name="route" value="books">

    <input
        type="text"
        name="search"
        placeholder="Rechercher un livre"
        value="<?= htmlspecialchars($_GET['search'] ?? '') ?>">

    <button type="submit">Rechercher</button>
</form>


<?php foreach ($books as $book): ?>

    <a href="?route=book&id=<?= $book['id'] ?>" style="text-decoration:none; color:inherit;">

        <div>

            <h3><?= htmlspecialchars($book['title']) ?></h3>

            <p><?= htmlspecialchars($book['author']) ?></p>

            <p>Vendu par : <?= htmlspecialchars($book['username']) ?></p>

        </div>

    </a>

    <hr>

<?php endforeach; ?>
<?php require __DIR__ . '/../layout/footer.php'; ?>