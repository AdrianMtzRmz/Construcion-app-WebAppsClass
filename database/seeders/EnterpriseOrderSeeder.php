<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EnterpriseOrder;

class EnterpriseOrderSeeder extends Seeder
{
    public function run()
    {
        EnterpriseOrder::factory(10)->create(); // Crea 10 registros de prueba
    }
}