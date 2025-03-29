<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnterpriseOrder extends Model
{
    use HasFactory;

    protected $table = 'enterprise_orders'; 

    protected $fillable = [
        'orderNumber', 'supplierContact', 'orderDate', 
        'deliveryAddress', 'status', 'totalAmount', 'isDeleted'
    ];
}