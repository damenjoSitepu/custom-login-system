<?php 

namespace App\Interfaces\Application\Auth\Registration;

// Request
use Illuminate\Http\Request;

interface RegistrationRepositoryInterface {
	/**
	 * Save registered user to user's table interface
	 * @param Illuminate\Http\Request
	 * @return bool
	 */
	public function establish(Request $registrationData): string;
}