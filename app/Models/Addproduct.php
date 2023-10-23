<?php

namespace App\Models;
use App\Models\Addcategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addproduct extends Model
{
    use HasFactory;
    protected $table = 'addproducts';
    public $timestamps = false;

    public function category()
    {
        return $this->belongsTo(Addcategory::class);
    }

    public function getCategoryNameAttribute()
    {
        if ($this->category) {
            return $this->category->categoryname;
        } else {
            return 'No Category'; // or any default value you prefer
        }
    }



}
