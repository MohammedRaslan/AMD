<?php

namespace App\Services;

use App\Repositories\DashboardRepository;
class DashboardService{

    protected $dashboardRepository;

    public function __construct(DashboardRepository $dashboardRepository) {
        $this->dashboardRepository = $dashboardRepository;
    }

    public function AdminDashboard()
    {
        return $this->dashboardRepository->AdminDashboard();
    }
}