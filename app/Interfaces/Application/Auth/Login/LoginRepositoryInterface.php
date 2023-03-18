<?php 

namespace App\Interfaces\Application\Auth\Login;

use App\Models\Application\User;

interface LoginRepositoryInterface {
    /**
	 * Check user info by their username
	 * @param string
	 * @return App\Models\Application\User
	 */
    public function checkUserInfoByUsername(string $username): ?User;
}