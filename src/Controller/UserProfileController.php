<?php

require_once __DIR__ . '/../Model/UserManager.php';
require_once __DIR__ . '/../Model/BookManager.php';

class UserProfileController
{
    public function show()
    {
        $userId = $_GET['id'] ?? null;

        if (!$userId) {
            header('Location: ?route=books');
            exit;
        }

        $userManager = new UserManager();
        $bookManager = new BookManager();

        $user = $userManager->findById($userId);
        $books = $bookManager->findByUserId($userId);

        require __DIR__ . '/../View/user/profile.php';
    }
}