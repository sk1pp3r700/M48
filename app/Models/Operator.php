<?php

##OG_SKIPPER

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operator extends Model
{
    use HasFactory;

    public function agents()
    {
        return $this->belongsToMany(Agent::class);
    }

}
