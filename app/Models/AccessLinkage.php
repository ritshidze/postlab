<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccessLinkage extends Model {

    protected $table = 'access_linkage';
    public $timestamps = true;
    protected $fillable = ['role', 'permission'];

}