<?php 

namespace App\Messages\Application\Dashboard;

// Interfaces
use App\Interfaces\Application\Dashboard\DashboardMessageInterface;

class DashboardMessage implements DashboardMessageInterface {
    /**
	 * Success register message properties
	 */
    private static $failGetFullName = 'User is empty';

    /**
     * When user is not found
     * @return string
     */
    public static function failGetFullName(): string 
    {
        return self::$failGetFullName;
    }
}