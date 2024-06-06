<?php
require_once 'Database.php';
require_once 'User.php';
require_once 'AuthenticatorBase.php';

class Authenticator extends AuthenticatorBase {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function login($email, $password) {
        $user = $this->db->getUserByEmailAndPassword($email, $password);

        if ($user) {
            return new User($user['id'], $user['name'], $user['email']);
        }

        return null;
    }
}
