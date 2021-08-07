<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function payments()
    {
        return $this->hasMany('App\Payment');
    }

    public function inersets()
    {
        return $this->hasMany('App\Intersteed');
    }
    public function updates()
    {
        return $this->belongsToMany('App\Update')->withTimestamps();
    }
    public function faqs()
    {
        return $this->belongsToMany('App\Faq')->withTimestamps();
    }
}
