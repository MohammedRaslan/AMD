<?php
namespace App\Repositories;

use App\Models\Order;

class OrderRepository{

    protected $Order;

    public function __construct( Order $Order ) {
        $this->Order = $Order;
    }

    


}