<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /**
     * Get users 
     */
    public function users()
    {
      return $this->belongsToMany(User::class);
    }
}
