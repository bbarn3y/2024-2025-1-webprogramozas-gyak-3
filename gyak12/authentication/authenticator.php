<?php

class UserStorage {

    // @note The password is password
    function findUser($username, $password): array {
        return array_filter(
            $this->getUsers(),
            fn($user) => $user['username'] == $username &&
                $user['password'] == md5($password));
    }

    function getUsers(): array {
        return json_decode(file_get_contents('users.json'), true);
    }
}

$userStorage = new UserStorage();

$matchingUsers = $userStorage->findUser($_POST['username'], $_POST['password']);

if (count($matchingUsers) == 1) {
    session_start();
    $_SESSION['user'] = array_shift($matchingUsers);
    header('Location: lobby.php');
    die();
}

header('Location: login.php');
