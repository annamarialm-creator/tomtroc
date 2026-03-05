<?php

require_once __DIR__ . '/../Model/BookManager.php';

class BookDetailController
{
    public function show()
    {
        $id = $_GET['id'] ?? null;

        if (!$id) {
            header('Location: ?route=books');
            exit;
        }

        $bookManager = new BookManager();
        $book = $bookManager->findBookWithOwner($id);

        if (!$book) {
            header('Location: ?route=books');
            exit;
        }

        require __DIR__ . '/../View/book/show.php';
    }
}