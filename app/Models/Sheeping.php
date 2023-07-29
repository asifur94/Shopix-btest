<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sheeping extends Model
{
    use HasFactory;
    protected $table = "sheepings";
    protected $primaryKey = "sheepings_id";
}
