<?php 

namespace App\Interfaces\Application\Dashboard;

// Models
use App\Models\Application\User;

interface DashboardRepositoryInterface {
    /**
	 * Display Full Name User Info
	 * @param string
	 * @return App\Models\Application\User
	 */
	public function profileInfo(string $id): ?User;
}