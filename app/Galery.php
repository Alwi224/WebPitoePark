<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galery extends Model
{
    protected $fillable = [
        'image','account_id','format'
    ];

    public function account(){
        return $this->belongsTo(Account::class);
    }
}