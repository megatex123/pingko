<?php

namespace App\Models;

use App\Models\CModel;
use Illuminate\Database\Eloquent\SoftDeletes;

class LkpRate extends CModel
{
    use SoftDeletes;

    protected $table = 'lkp_rate';

    protected $fillable = [
      'description',
    ];
}
