<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'code',
        'name',
        'price',
        'classification_id',
        'isproduct'
    ];

    public function classification(){
        return $this->belongsTo('App\Classification','classification_id');
    }
}
