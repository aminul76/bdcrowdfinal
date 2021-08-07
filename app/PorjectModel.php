<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Faq;
class PorjectModel extends Model
{

    function faq(){
        return $this->hasMany('App\Faq');
    }

    public $table='projects';
    public $primaryKey='id';
    public $incrementing=true;
    public $keyType='int';
    public  $timestamps=true;
}


