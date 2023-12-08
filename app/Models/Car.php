<?php

namespace App\Models;

use App\Models\CModel;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends CModel
{
    use SoftDeletes;

    protected $table = 'car';

    protected $fillable = [
        'user_id',
        'lkp_car_type_id',
        'lkp_car_brand_id',
        'lkp_car_name_id',
        'license_plate_no',
        'year',
        'version',
    ];

    public function user()
    {
        return $this->hasMany(User::class);
    }

}
