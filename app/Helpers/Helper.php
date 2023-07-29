<?php

use App\Models\featured_service;
use App\Models\FeaturedBrand;
use App\Models\manu_sortable;
use App\Models\ManuSortable;
use App\Models\Setting;
use App\Models\Sheeping;
use App\Models\WebsiteSetting;
use Illuminate\Support\Facades\DB;


    function getwebsitetopdata(){
        return  WebsiteSetting::first();
    }

    function getshippingtext(){
        return Sheeping::first();
    }


?>
