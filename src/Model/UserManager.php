<?php

require_once __DIR__ . '/Database.php';

class UserManager
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getConnection();
    }

    public function createUser($username, $email, $password)
    {
        $sql = "INSERT INTO users (username, email, password, created_at)
                VALUES (:username, :email, :password, NOW())";

        $stmt = $this->db->prepare($sql);

        $stmt->execute([
            'username' => $username,
            'email' => $email,
            'password' => $password
        ]);
    }

    public function findByEmail($email)
{
    $sql = "SELECT * FROM users WHERE email = :email LIMIT 1";

    $stmt = $this->db->prepare($sql);
    $stmt->execute(['email' => $email]);

    return $stmt->fetch(PDO::FETCH_ASSOC);
}

}