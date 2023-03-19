<?php 

namespace App\TextStatus\Application\Dashboard;

// Interfaces
use App\Interfaces\Application\Dashboard\DashboardTextStatusInterface;

class DashboardTextStatus implements DashboardTextStatusInterface {
    /**
	 * Success registration process properties
	 */
    private static $invalidFullName = 'USER NOT FOUND';

    /**
	 * When User fullname not found
	 * @return string
	 */
	public static function invalidFullName(): string
    {
        return self::$invalidFullName;
    }
}