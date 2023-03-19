<?php 

namespace App\Interfaces\Application\Dashboard;

interface DashboardTextStatusInterface {
    /**
	 * When User fullname not found
	 * @return string
	 */
	public static function invalidFullName(): string;
}