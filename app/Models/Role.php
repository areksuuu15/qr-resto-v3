<?php

namespace App;
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    // define the relationship between roles and users
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
