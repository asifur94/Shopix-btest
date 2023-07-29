<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebsiteSetting1 extends Model
{
    use HasFactory;
    protected $table = "website_setting1s";
    protected $primaryKey = "website_setting1s_id";
}
