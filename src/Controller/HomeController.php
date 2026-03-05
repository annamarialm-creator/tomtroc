<?php


class HomeController
{
    public function index()
{
    $pdo = Database::getConnection();

    $stmt = $pdo->query("SELECT username FROM users LIMIT 1");
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    $username = $result['username'];

    require __DIR__ . '/../View/home.php';
}
}