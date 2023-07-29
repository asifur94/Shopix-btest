<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SingleProduct extends Model
{
    use HasFactory;
    protected $table = "single_products";
    protected $primaryKey = "single_products_id";
}
