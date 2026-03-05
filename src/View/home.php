<?php require __DIR__ . '/layout/header.php'; ?>

<h1>Rejoignez nos lecteurs passionnés</h1>

<p>Donnez une nouvelle vie à vos livres en les échangeant avec d'autres amoureux de la lecture. Nous croyons en la magie du partage de connaissances et d'histoires à travers les livres.</p>

<a href="?route=books">Découvrir</a>


<h2>Les derniers livres ajoutés</h2>

<div>

    <?php foreach ($latestBooks as $book): ?>

        <div>

            <h3>
                <a href="?route=book&id=<?= $book['id'] ?>">
                    <?= htmlspecialchars($book['title']) ?>
                </a>
            </h3>

            <p><?= htmlspecialchars($book['author']) ?></p>

            <p>Proposé par <?= htmlspecialchars($book['username']) ?></p>

        </div>

        <hr>

    <?php endforeach; ?>

</div>

<a href="?route=books">Voir tous les livres</a>

<h2>Comment ça marche ?</h2>

<div>

    <a href="?route=register" style="text-decoration:none; color:inherit;">
        <div>
            <h3>Inscrivez-vous gratuitement</h3>
            <p>Créez votre compte pour rejoindre la communauté.</p>
        </div>
    </a>

    <a href="?route=create-book" style="text-decoration:none; color:inherit;">
        <div>
            <h3>Ajoutez les livres</h3>
            <p>Ajoutez les livres que vous souhaitez échanger.</p>
        </div>
    </a>

    <a href="?route=books" style="text-decoration:none; color:inherit;">
        <div>
            <h3>Parcourez les livres</h3>
            <p>Découvrez les livres disponibles à l’échange.</p>
        </div>
    </a>

    <a href="?route=books" style="text-decoration:none; color:inherit;">
        <div>
            <h3>Contactez un membre</h3>
            <p>Trouvez un livre et contactez son propriétaire.</p>
        </div>
    </a>

</div>


<div>

    <a href="?route=books">
        <button>Voir tous les livres</button>
    </a>

    <h2>Nos valeurs</h2>

    <p>
        Chez Tom Troc, nous mettons l'accent sur le partage, la découverte et la communauté.
        Nos valeurs sont ancrées dans notre passion pour les livres et notre désir de créer
        des liens entre les lecteurs. Nous croyons en la puissance des histoires pour
        rassembler les gens et inspirer des conversations enrichissantes.
    </p>

    <p>
        Notre association a été fondée avec une conviction profonde : chaque livre mérite
        d'être lu et partagé.
    </p>

    <p>
        Nous sommes passionnés par la création d'une plateforme conviviale qui permet aux
        lecteurs de se connecter, de partager leurs découvertes littéraires et d'échanger
        des livres qui attendent patiemment sur les étagères.
    </p>

    <p><strong>L'équipe Tom Troc</strong></p>

</div>

<?php require __DIR__ . '/layout/footer.php'; ?>