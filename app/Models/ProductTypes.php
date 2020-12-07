<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductTypes extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function products(){
        return $this->belongsTo(Product::class);
    }
}
