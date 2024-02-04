<?php

namespace Tests\Feature;

use App\Services\UserServiceInterface;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserServiceTest extends TestCase
{
    private UserServiceInterface $userService;

    protected function setUp():void
    {
        parent::setUp();

        $this->userService = $this->app->make(UserServiceInterface::class);
    }
    //method checks if the login is successful with correct credentials.
    public function testLoginSuccess()
    {
        self::assertTrue($this->userService->login("admin", "12345"));
    }

    public function testLoginUserNotFound()
    {
        self::assertFalse($this->userService->login("tes", "tes"));
    }

    public function testLoginWrongPassword()
    {
        self::assertFalse($this->userService->login("admin", "salah"));
    }

}