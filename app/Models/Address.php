<?php

namespace App\Models;

use App\Models\CModel;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends CModel
{
    use SoftDeletes;

    protected $table = 'address';

    protected $fillable = [
      'user_id',
      'description',
    ];

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
