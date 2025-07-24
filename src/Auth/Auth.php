<?php
namespace ObelisIA\Auth;

class Auth {
    private $conn;
    private $currentUser = null;
    private $table_name = "users";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function register($username, $email, $password, $full_name) {
        $query = "SELECT id FROM " . $this->table_name . " WHERE username = ? OR email = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$username, $email]);
        if ($stmt->rowCount() > 0) {
            return false;
        }
        $query = "INSERT INTO " . $this->table_name . " (username, email, password, full_name, created_at) VALUES (?, ?, ?, ?, NOW())";
        $stmt = $this->conn->prepare($query);
        $hashed_password = password_hash($password, PASSWORD_ARGON2ID);
        if ($stmt->execute([$username, $email, $hashed_password, $full_name])) {
            return true;
        }
        return false;
    }

    public function login($username, $password) {
        $query = "SELECT id, username, email, password, full_name, membership_type, credits_remaining, role FROM " . $this->table_name . " WHERE username = ? OR email = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$username, $username]);
        if ($stmt->rowCount() == 1) {
            $row = $stmt->fetch(\PDO::FETCH_ASSOC);
            if (password_verify($password, $row['password'])) {
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['full_name'] = $row['full_name'];
                $_SESSION['membership_type'] = $row['membership_type'];
                $_SESSION['credits_remaining'] = $row['credits_remaining'];
                $_SESSION['role'] = $row['role'] ?? 'user';
                $update_query = "UPDATE " . $this->table_name . " SET last_login = NOW() WHERE id = ?";
                $update_stmt = $this->conn->prepare($update_query);
                $update_stmt->execute([$row['id']]);
                return true;
            }
        }
        return false;
    }

    public function logout() {
        session_unset();
        session_destroy();
    }

    public function isLoggedIn() {
        return isset($_SESSION['user_id']);
    }

    public function getCurrentUser($forceRefresh = false) {
        if (!$this->isLoggedIn()) {
            return null;
        }

        if ($this->currentUser === null || $forceRefresh) {
            $query = "SELECT * FROM " . $this->table_name . " WHERE id = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([$_SESSION['user_id']]);
            if ($stmt->rowCount() == 1) {
                $this->currentUser = $stmt->fetch(\PDO::FETCH_ASSOC);
                // Aseguramos que el tipo de subscripción exista para evitar errores
                $this->currentUser['subscription_type'] = $this->currentUser['membership_type'] ?? 'free';
            } else {
                // Si el usuario en sesión no existe en la BD, cerramos sesión.
                $this->logout();
                return null;
            }
        }
        
        return $this->currentUser;
    }
}
