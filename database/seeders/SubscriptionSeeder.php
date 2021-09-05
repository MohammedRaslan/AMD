<?php

namespace Database\Seeders;

use App\Models\Subscription;
use Illuminate\Database\Seeder;

class SubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subscriptions = [
            [
                'id'         => 1,
                'type'       => 'FREE',
                'currency' => 'USD',
                'annual' => 0,
                'monthly' => 0,
                'product_quantity' => 50,
                'rate_one_percentage' => 0,
                'rate_one_quantity' => 0,
                'rate_two_percentage' => 0,
                'rate_two_quantity' => 0,
                'rate_three_percentage' => 9,
                'rate_three_quantity' => 0,
                'fees' => 0,
                'created_at' => now(),
            ],
            [
                'id'         => 2,
                'type'       => 'SILVER',
                'currency' => 'USD',
                'annual' => 219.89,
                'monthly' => 19.99,
                'product_quantity' => 100,
                'rate_one_percentage' => 0,
                'rate_one_quantity' => 0,
                'rate_two_percentage' => 7,
                'rate_two_quantity' => 10,
                'rate_three_percentage' => 8,
                'rate_three_quantity' => 0,
                'fees' => 0,
                'created_at' => now(),
            ],
            [
                'id'         => 3,
                'type'       => 'GOLD',
                'currency' => 'USD',
                'annual' => 549.89,
                'monthly' => 49.99,
                'product_quantity' => 250,
                'rate_one_percentage' => 0,
                'rate_one_quantity' => 2,
                'rate_two_percentage' => 0,
                'rate_two_quantity' => 0,
                'rate_three_percentage' => 7,
                'rate_three_quantity' => 0,
                'fees' => 0,
                'created_at' => now(),
            ],
            [
                'id'         => 4,
                'type'       => 'PLATINUM ',
                'currency' => 'USD',
                'annual' => 1099.89,
                'monthly' => 99.99,
                'product_quantity' => 500,
                'rate_one_percentage' => 0,
                'rate_one_quantity' => 5,
                'rate_two_percentage' => 5,
                'rate_two_quantity' => 25,
                'rate_three_percentage' => 7,
                'rate_three_quantity' => 0,
                'fees' => 0,
                'created_at' => now(),
            ],
        ];
        // dd($subscriptions);
        Subscription::insert($subscriptions);
    }
}
