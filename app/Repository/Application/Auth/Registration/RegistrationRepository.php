<?php 

namespace App\Repository\Application\Auth\Registration;

// Interfaces
use App\Interfaces\Application\Auth\Registration\RegistrationRepositoryInterface;

// Models
use App\Models\Application\User;

// Request
use Illuminate\Http\Request;

// Services 
use App\Services\Application\Auth\HashService;

class RegistrationRepository implements RegistrationRepositoryInterface {
	/**
	 * Save registered user to user's table
	 * @param Illuminate\Http\Request
	 * @return bool
	 */
    public function establish(Request $registrationData): bool {
		$user 				= new User;
        $user->full_name 	= $registrationData->full_name;
        $user->email 		= $registrationData->email;
        $user->username 	= $registrationData->username;
        $user->password 	= HashService::makePassword($registrationData->password);
        return $user->save();
	}
}
