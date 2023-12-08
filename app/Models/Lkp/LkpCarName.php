<?php

namespace App\Models;

use App\Models\CModel;
use Illuminate\Database\Eloquent\SoftDeletes;

class LkpCarName extends CModel
{
    use SoftDeletes;

    protected $table = 'lkp_car_name';

    protected $fillable = [
      'description',
    ];
}
