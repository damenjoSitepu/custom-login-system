<?php

namespace App\Http\Controllers\Application\Dashboard;

use App\Http\Controllers\Controller;

// Laravel Type Hinting
use Illuminate\View\View;

class DashboardController extends Controller
{
    /**
     * Dashboard Main View
     * @return Illuminate\View\View
     */
    public function __invoke(): View
    {
        return view('dashboard.index');
    }
}
