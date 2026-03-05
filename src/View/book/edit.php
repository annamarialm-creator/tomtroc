<?php require __DIR__ . '/../layout/header.php'; ?>

<h1>Modifier les informations</h1>

<a href="?route=account">← retour</a>

<form method="POST">

    <div>
        <label>Photo</label>
        <p>(Image non modifiable pour l’instant)</p>
    </div>

    <div>
        <label for="title">Titre</label>
        <input
            type="text"
            name="title"
            id="title"
            value="<?= htmlspecialchars($book['title']) ?>"
            required
        >
    </div>

    <div>
        <label for="author">Auteur</label>
        <input
            type="text"
            name="author"
            id="author"
            value="<?= htmlspecialchars($book['author']) ?>"
            required
        >
    </div>

    <div>
        <label for="description">Commentaire</label>
        <textarea
            name="description"
            id="description"
        ><?= htmlspecialchars($book['description']) ?></textarea>
    </div>

    <div>
        <label for="status">Disponibilité</label>
        <select name="status" id="status">
            <option value="available" <?= $book['status'] === 'available' ? 'selected' : '' ?>>
                disponible
            </option>
            <option value="unavailable" <?= $book['status'] === 'unavailable' ? 'selected' : '' ?>>
                indisponible
            </option>
        </select>
    </div>

    <button type="submit">Valider</button>

</form>

<?php require __DIR__ . '/../layout/footer.php'; ?>