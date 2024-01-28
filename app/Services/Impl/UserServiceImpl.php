namespace App\Services\Impl;

use App\Services\UserServiceInterface;

class UserServiceImpl implements UserServiceInterface
{

    private array $users = [
        "admin" => "12345"
    ];

    function login(string $user, string $password): bool
    {
        if (!isset($this->users[$user])) {
            return false;
        }

        $correctPassword = $this->users[$user];
        return $password == $correctPassword;
    }
}