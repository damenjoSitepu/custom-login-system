<?php 

namespace App\Interfaces\Application\Dashboard;

interface DashboardMessageInterface {
    /**
     * When user is not found
     * @return string
     */
    public static function failGetFullName(): string;
}