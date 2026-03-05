<?php

require_once __DIR__ . '/Database.php';

class BookManager
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getConnection();
    }

    public function findByUserId($userId)
    {
        $sql = "SELECT * FROM books WHERE user_id = :user_id";

        $stmt = $this->db->prepare($sql);
        $stmt->execute(['user_id' => $userId]);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}