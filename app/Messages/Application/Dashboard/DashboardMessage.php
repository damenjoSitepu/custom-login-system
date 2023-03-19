<?php 

namespace App\Messages\Application\Dashboard;

// Interfaces
use App\Interfaces\Application\Dashboard\DashboardMessageInterface;

class DashboardMessage implements DashboardMessageInterface {
    /**
	 * Fail to get full name
	 */
    const FAIL_GET_FULL_NAME = 'Username can\'t be found because User credential is wrong';
}