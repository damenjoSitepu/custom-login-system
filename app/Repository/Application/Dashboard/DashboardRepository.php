<?php 

namespace App\Repository\Application\Dashboard;

// Models
use App\Models\Application\User;
// Interfaces
use App\Interfaces\Application\Dashboard\DashboardRepositoryInterface;
// Text Status 
use App\TextStatus\Application\Dashboard\DashboardTextStatus;

class DashboardRepository implements DashboardRepositoryInterface {
    /**
	 * Display Full Name User Info
	 * @param string
	 * @return mixed<App\Models\Application\User, string>
	 */
	public function profileInfo(string $id): mixed
    {
        $user = User::select('full_name')
                    ->where('id',$id)
                    ->first();
        
        return empty($user) && !$user ? DashboardTextStatus::invalidFullName() : $user;
    }
}