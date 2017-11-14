<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccessPermission extends Model {

    protected $table = 'access_permissions';
    public $timestamps = true;
    protected $fillable = ['key', 'name', 'description'];
    
}
