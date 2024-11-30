<?php

class UserStorage {

    // @note The password is password
    function findUser($username, $password): array {
        // @todo Implement!
    }

    function getUsers(): array {
        return json_decode(file_get_contents('users.json'), true);
    }
}

