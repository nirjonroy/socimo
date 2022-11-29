<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusinessPage extends Model
{
    protected $fillable =[
                    'id',
                    'user_id',
                    'email',
                    'password',
                    'BusinessName',
                    'BusinessSubtitle',
                    'language',
                    'businessCategory',
                    'businessSubCategory',
                    'description',
                    'tarms_condition',
    ];
}
