<?php

namespace App;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $fillable = [
        'name',
        'created_at',
        'slug',
        'parent',
        'description',
    ];
    public function setCreatedAtAttribute($date){
        //format l?i $date ðý?c g?i vào t? form
        $this->attributes['created_at'] = Carbon::createFromFormat('Y-m-d',$date);
    }
}
