<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SubCategory;


class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_name',
        'slug',
    ];


    public function subCategories() {
    return $this->hasMany(SubCategory::class);
}


public function products()
{
    return $this->hasManyThrough(Product::class, SubCategory::class);
}



}
