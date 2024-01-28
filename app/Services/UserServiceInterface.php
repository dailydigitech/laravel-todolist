<?php

namespace App\Services;

interface UserServiceInterface
{
    function login(string $user, string $password): bool;
}