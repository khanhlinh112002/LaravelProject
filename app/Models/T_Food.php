<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class T_Food extends Model
{
    use HasFactory;
    protected $table = 't__food';
    public function type(){
        return $this->belongsTo('App\Models\Type','category','category');
    }
}
