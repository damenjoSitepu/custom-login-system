<?php 

namespace App\Repository\Application\Dashboard;

// Models
use App\Models\Application\User;
// Interfaces
use App\Interfaces\Application\Dashboard\DashboardRepositoryInterface;
// Text Status 
use App\TextStatus\Application\Auth\Credential\CredentialTextStatus;

class DashboardRepository implements DashboardRepositoryInterface {
    /**
	 * Display Full Name User Info
	 * @param string
	 * @return App\Models\Application\User
	 */
	public function profileInfo(string $id): ?User
    {
        return User::select('full_name')
                    ->where('id',$id)
                    ->first();
    }
}