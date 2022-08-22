<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adress extends Model
{
    use HasFactory;
    protected $fillable=['user_id','city','road','number','cap','state'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
