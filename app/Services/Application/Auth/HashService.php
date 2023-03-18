<?php 

namespace App\Services\Application\Auth;

// Hash Library
use Illuminate\Support\Facades\Hash;

class HashService {
	/**
	 * Argon2 default options parameter
	 */
	private static $argon2DefaultOptions = [
		'memory' 	=> 1024,
		'time'		=> 2,
		'threads'	=> 2
	];

	/**
	 * Create hash password using argon2 algorithm with default options
	 * @param string
	 * @return string
	 */
	public static function makePassword(string $password): ?string
	{
		// If password is empty
		if (empty($password)) {
			return null;
		}
		// Create password using algorithm
		return Hash::make($password,self::$argon2DefaultOptions);
	}
}