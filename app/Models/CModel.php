<?php

namespace App\Models;

use App\Services\Traits\ModelActivityTrail;
use Illuminate\Database\Eloquent\Model;
use \Spatie\Activitylog\Models\Activity;
// use Laravel\Scout\Searchable;

class CModel extends Model
{
    use ModelActivityTrail;

    /**
     * this is alternative method to log activity which directly store activity in the model
     * reason this existence is becase spatie on($model) require the model to be loaded
     * where as there are condition where we need to log activity on main table while the activity 
     * happening on the other table.
     * 
     * please note that you can also fetch activities on the sub table
     * use this function on the event where explicit logging required
     * 
     */
    public static function trail($id, $description, $tname = 'tindakan', $properties = [], $causer_type = 'App\User', $causer_id = null)
    {
      $t = new Activity();
      $t->log_name = $tname;
      $t->description = $description;
      $t->subject_type = get_called_class();
      $t->subject_id = $id;
      $t->causer_type = $causer_type;
      $t->properties = $properties;
      $t->causer_id = $causer_id ?: auth()->user()->id;
      $t->save();
    }
}
