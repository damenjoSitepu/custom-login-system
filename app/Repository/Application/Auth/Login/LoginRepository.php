<?php 

namespace App\Repository\Application\Auth\Login;

// Models
use App\Models\Application\User;
// Interfaces
use App\Interfaces\Application\Auth\Login\LoginRepositoryInterface;
// Standard Class
use stdClass;

class LoginRepository implements LoginRepositoryInterface {
    /**
	 * Check user info by their username
	 * @param string
	 * @return App\Models\Application\User
	 */
    public function checkUserInfoByUsername(string $username): ?User 
    {
    	return User::select('username','password','full_name')
					->where('username',$username)->first();
	}
}