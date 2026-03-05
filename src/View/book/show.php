<?php require __DIR__ . '/../layout/header.php'; ?>

<p>
    <a href="?route=books">Nos livres</a>
    >
    <?= htmlspecialchars($book['title']) ?>
</p>

<h1><?= htmlspecialchars($book['title']) ?></h1>

<p>par <?= htmlspecialchars($book['author']) ?></p>

<h3>Description</h3>

<p><?= nl2br(htmlspecialchars($book['description'])) ?></p>

<h3>Propriétaire</h3>

<p>
    <a href="?route=profile&id=<?= $book['user_id'] ?>">
        <?= htmlspecialchars($book['username']) ?>
    </a>
</p>

<button>Envoyer un message</button>

<?php require __DIR__ . '/../layout/footer.php'; ?>