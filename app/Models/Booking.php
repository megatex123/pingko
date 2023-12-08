<?php

namespace App\Models;

use App\Models\CModel;
use Illuminate\Database\Eloquent\SoftDeletes;

class Booking extends CModel
{
    use SoftDeletes;

    protected $table = 'booking';

    protected $fillable = [
      'review_id',
      'user_id',
      'vendor_id',
      'lkp_booking_status_id',
    ];

    public function user()
    {
        return $this->hasMany(User::class);
    }

    public function vendor()
    {
        return $this->hasMany(Vendor::class);
    }

    public function review()
    {
        return $this->hasMany(Review::class);
    }
}
