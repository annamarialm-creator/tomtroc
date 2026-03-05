<?php

require_once __DIR__ . '/../Model/BookManager.php';

class HomeController
{
    public function index()
    {
        $bookManager = new BookManager();

        $latestBooks = $bookManager->findLatestBooks(4);

        require __DIR__ . '/../View/home.php';
    }
}