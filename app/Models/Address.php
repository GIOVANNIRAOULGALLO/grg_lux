<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'addresses';
    use HasFactory;
    protected $fillable=['user_id','city','road','number','cap','state'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function orders(){
    return $this->hasMany(Order::class);
    }

}
