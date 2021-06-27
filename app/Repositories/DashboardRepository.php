<?php
namespace App\Repositories;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;

class DashboardRepository{

    public function AdminDashboard()
    {
        $userCount = User::count();
        $categoryCount = Category::count();
        $productCount  = Product::count();
        return [
            'userCount' => $userCount,
            'categoryCount' => $categoryCount,
            'productCount' => $productCount,
        ];
    }
}