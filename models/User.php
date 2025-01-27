<?php

class User
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function authenticate($username, $password)
    {
        $query = $this->db->prepare("SELECT * FROM users WHERE username = :username");
        $query->execute(['username' => $username]);
        $user = $query->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }
        return false;
    }
}
?>
