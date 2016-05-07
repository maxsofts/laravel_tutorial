<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class categories extends Model
{
    protected $fillable=[
        'name',
        'created_at'
    ];//
}
