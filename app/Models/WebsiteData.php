<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebsiteData extends Model
{
    use HasFactory;
    protected $table = "website_data";
    protected $primaryKey = "website_data_id";
}
