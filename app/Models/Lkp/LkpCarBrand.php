<?php

namespace App\Models;

use App\Models\CModel;
use Illuminate\Database\Eloquent\SoftDeletes;

class LkpCarBrand extends CModel
{
    use SoftDeletes;

    protected $table = 'lkp_car_brand';

    protected $fillable = [
      'description',
    ];
}
