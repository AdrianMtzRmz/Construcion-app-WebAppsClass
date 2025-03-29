<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('enterprise_orders', function (Blueprint $table) {
            $table->id();
            $table->string('orderNumber')->unique();
            $table->string('supplierContact');
            $table->date('orderDate');
            $table->string('deliveryAddress');
            $table->double('totalAmount', 10, 2);
            $table->enum('status', ['ORDERED', 'IN_PROCESS', 'IN_ROUTE', 'DELIVERED'])->default('ORDERED');
            $table->boolean('isDeleted')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('enterprise_orders');
    }
};
