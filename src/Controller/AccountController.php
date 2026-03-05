<?php

require_once __DIR__ . '/../Model/UserManager.php';
require_once __DIR__ . '/../Model/BookManager.php';
class AccountController
{
    public function index()
    {
        if (!isset($_SESSION['user_id'])) {
            header('Location: ?route=login');
            exit;
        }

        $userManager = new UserManager();
        $user = $userManager->findById($_SESSION['user_id']);

        $bookManager = new BookManager();
        $books = $bookManager->findByUserId($_SESSION['user_id']);

        require __DIR__ . '/../View/account/index.php';
    }
}
