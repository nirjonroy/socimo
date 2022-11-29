<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productBrand extends Model
{
    protected $fillable =[
        'id',
        'business_id',
        'brandName',
        'image',
        'status',
        
];
}
