<?php 

namespace App\Interfaces\Application\Dashboard;

// Models
use App\Models\Application\User;

interface DashboardRepositoryInterface {
    /**
	 * Display Full Name User Info
	 * @param string
	 * @return mixed<App\Models\Application\User, string>
	 */
	public function profileInfo(string $id): mixed;
}