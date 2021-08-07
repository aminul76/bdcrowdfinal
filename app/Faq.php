<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\PorjectModel;

class Faq extends Model
{

    function project(){
        return $this->belongsTo('App\PorjectModel','project_id');
    }

    public $table='Faq';
    public $primaryKey='id';
    public $incrementing=true;
    public $keyType='int';
    public  $timestamps=true;

    public function projects()
    {
        return $this->belongsToMany('App\Project','project_id')->withTimestamps();
    }
}
