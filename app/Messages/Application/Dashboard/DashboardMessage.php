<?php 

namespace App\Messages\Application\Dashboard;

// Interfaces
use App\Interfaces\Application\Dashboard\DashboardMessageInterface;

class DashboardMessage implements DashboardMessageInterface {
    /**
	 * Fail to get full name
	 */
    const USERNAME_NOT_FOUND = 'Username can\'t be found because User credential is wrong';
}