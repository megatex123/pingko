<?php

namespace App\Models;

use App\Models\CModel;
use Illuminate\Database\Eloquent\SoftDeletes;

class LkpUserType extends CModel
{
    use SoftDeletes;

    protected $table = 'lkp_user_type';

    protected $fillable = [
      'description',
    ];
}
