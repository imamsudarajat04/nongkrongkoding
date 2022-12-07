<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Model_has_role extends Model
{
    use HasFactory;

    protected $table = "model_has_roles";

    public function roles()
    {
        return $this->hasMany(Role::class, 'id', 'role_id');
    }
}
