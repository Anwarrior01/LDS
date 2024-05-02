<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Stock;

class Stock extends Model
{
    use HasFactory;
       protected $fillable = [
        'Product_Name',
        'Product_Type',
        'Quantity',
        'Description',
        'price',
        'Stock_Owner'
    ];
}
