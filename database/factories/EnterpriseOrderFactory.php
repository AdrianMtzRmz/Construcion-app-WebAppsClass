<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\EnterpriseOrder;
use Illuminate\Support\Str;

class EnterpriseOrderFactory extends Factory
{
    protected $model = EnterpriseOrder::class;

    public function definition()
    {
        return [
            'orderNumber' => Str::uuid(),
            'supplierContact' => $this->faker->company,
            'orderDate' => $this->faker->date(),
            'deliveryAddress' => $this->faker->address,
            'status' => $this->faker->randomElement(['ORDERED', 'IN_PROCESS', 'IN_ROUTE', 'DELIVERED']),
            'totalAmount' => $this->faker->randomFloat(2, 100, 5000),
            'isDeleted' => false,
        ];
    }
}