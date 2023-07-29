<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plaseorder extends Model
{
    use HasFactory;
    protected $table = "plaseorders";
    protected $primaryKey = "plaseorders_id";
}
