<?php

require_once __DIR__ . '/../Model/BookManager.php';

class BookListController
{
    public function index()
    {
        $bookManager = new BookManager();

        $search = $_GET['search'] ?? null;

        if ($search) {
            $books = $bookManager->searchByTitle($search);
        } else {
            $books = $bookManager->findAvailableBooks();
        }

        require __DIR__ . '/../View/books/index.php';
    }
}