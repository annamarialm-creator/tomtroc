<?php

require_once __DIR__ . '/../Model/BookManager.php';

class BookController
{
    public function create()
    {
        if (!isset($_SESSION['user_id'])) {
            header('Location: ?route=login');
            exit;
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $title = $_POST['title'] ?? '';
            $author = $_POST['author'] ?? '';
            $description = $_POST['description'] ?? '';
            $status = $_POST['status'] ?? 'available';

            $bookManager = new BookManager();
            $bookManager->createBook(
                $_SESSION['user_id'],
                $title,
                $author,
                $description,
                $status
            );

            header('Location: ?route=account');
            exit;
        }

        require __DIR__ . '/../View/book/create.php';
    }

    public function edit()
    {
        if (!isset($_SESSION['user_id'])) {
            header('Location: ?route=login');
            exit;
        }

        $bookManager = new BookManager();

        $id = $_GET['id'] ?? null;

        if (!$id) {
            header('Location: ?route=account');
            exit;
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $title = $_POST['title'] ?? '';
            $author = $_POST['author'] ?? '';
            $description = $_POST['description'] ?? '';
            $status = $_POST['status'] ?? 'available';

            $bookManager->updateBook($id, $title, $author, $description, $status);

            header('Location: ?route=account');
            exit;
        }

        $book = $bookManager->findById($id);

        require __DIR__ . '/../View/book/edit.php';
    }

    public function delete()
    {
        if (!isset($_SESSION['user_id'])) {
            header('Location: ?route=login');
            exit;
        }

        $id = $_GET['id'] ?? null;

        if (!$id) {
            header('Location: ?route=account');
            exit;
        }

        $bookManager = new BookManager();
        $bookManager->deleteBook($id);

        header('Location: ?route=account');
        exit;
    }
}
