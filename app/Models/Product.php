<?php

namespace App\Models;

use App\Models\Brand;
use App\Models\Category;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use Searchable;
    use HasFactory;
    protected $fillable=['name','description','price','sex','color','quantity','category_id','brand_id','buy'];

    public function toSearchableArray()
    {
        $array=[
            'id'=>$this->id,
            'name'=>$this->name,
            'description'=>$this->description,
            'category'=>$this->category->name,
            'brand'=>$this->brand->name,
            'sex'=>$this->sex,
            'color'=>$this->color,
            'quantity'=>$this->quantity
        ];
        return $array;
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function brand(){
        return $this->belongsTo(Brand::class);
    }
    public function users(){
        return $this->belongsToMany(User::class);
    }
    public function orders()
    {
        return $this->belongsToMany(Order::class)->withPivot('quantity')->withTimestamps();
    }

     
}
