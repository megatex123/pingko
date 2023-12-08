<?php

namespace App\Models;

use App\Models\CModel;
use Illuminate\Database\Eloquent\SoftDeletes;

class LkpBookingStatus extends CModel
{
    use SoftDeletes;

    protected $table = 'lkp_booking_status';

    protected $fillable = [
      'description',
    ];
}
