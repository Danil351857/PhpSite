<?php

namespace Classes;

class AuthController
{
    public static function logout(): void
    {
        // Перевірка CSRF токена
        $token = $_GET['token'] ?? '';
        if (!hash_equals($_SESSION['csrf_token'] ?? '', $token)) {
            header('Location: /');
            exit;
        }
        
        $_SESSION = [];
        session_destroy();
        header('Location: /');
        exit;
    }
    
    public static function generateCsrfToken(): string
    {
        if (!isset($_SESSION['csrf_token'])) {
            $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
        }
        return $_SESSION['csrf_token'];
    }

    public static function login(): bool
    {
        // Перевірка логіну
        $login = $_POST['login'] ?? '';
        $password = $_POST['password'] ?? '';

        // Отримуємо дані (Database::select повертає масив масивів)
        $users = Database::select("
            SELECT login, password 
            FROM users
            WHERE 
            login = '" . Database::escape($login) . "'
            AND
            password = '" . Database::escape($password) . "'
        ");

        // Перевірка чи існує користувач і чи пароль правильний
        if (!empty($users) && isset($users[0])) {
            session_start();
            $_SESSION['login'] = $users[0]['login'];
            header('Location: /');
            exit;
        }

        // У випадку невірного логіну/пароля
        session_start();
        $_SESSION['login_error'] = 'Невірний логін або пароль';
        header('Location: /login');
        exit;
    }

    public function reg(){
        // Перевірка логіну
        $login = $_POST['login'] ?? '';
        $password = $_POST['password'] ?? '';

        $insert_sql = "
            INSERT INTO users (login, password) 
            VALUES ('" . Database::escape($login) . "', '" . Database::escape($password) . "')
        ";
        
        Database::query($insert_sql);
        header('Location: /');
        exit;
    }

    public static function isLogged(): bool
    {
        return !empty($_SESSION['login']);
    }
}