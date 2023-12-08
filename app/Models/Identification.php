<?php

namespace App\Models;

use App\Models\CModel;
use Illuminate\Database\Eloquent\SoftDeletes;

class Identification extends CModel
{
    use SoftDeletes;

    protected $table = 'identification';

    protected $fillable = [
      'user_id',
      'lkp_identification_type_id',

    ];

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
