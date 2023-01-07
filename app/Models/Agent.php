<?php

##OG_SKIPPER

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;
    
    public function Handler()
    {
        return $this->hasOne(Handler::class);
    }

    public function taskforce()
    {
        return $this->belongsTo(taskforce::class);
    }

    public function operators()
    {
        return $this->belongsToMany(Operator::class);
    }

}
