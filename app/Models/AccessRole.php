<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccessRole extends Model {

    protected $table = 'access_roles';
    public $timestamps = true;
    protected $fillable = ['name', 'description'];

    public function user() {

        return $this->belongsTo('App\Models\AccessLinkage\User');
    }

    public function permission() {

        return $this->hasMany('App\Models\AccessLinkage', 'role', 'id');
    }

}
