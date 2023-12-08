<?php

namespace App\Models;

use App\Models\CModel;
use Illuminate\Database\Eloquent\SoftDeletes;

class LkpCarType extends CModel
{
    use SoftDeletes;

    protected $table = 'lkp_car_type';

    protected $fillable = [
      'description',
    ];
}
