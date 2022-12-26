<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role_has_permission extends Model
{
    use HasFactory;

    protected $table = "role_has_permissions";

    public function roles() {
        $this->belongsTo(Role::class);
    }

    public function permission() {
        $this->belongsTo(Permission::class);
    }
}
