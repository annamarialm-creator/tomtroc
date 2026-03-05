<?php

class AccountController
{
    public function index()
    {
        if (!isset($_SESSION['user_id'])) {
            header('Location: ?route=login');
            exit;
        }

        require __DIR__ . '/../View/account/index.php';
    }
}