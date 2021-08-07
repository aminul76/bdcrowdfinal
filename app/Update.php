<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Update extends Model
{
    public function project()
    {
        return $this->belongsToMany('App\Project','project_id')->withTimestamps();
    }
}
