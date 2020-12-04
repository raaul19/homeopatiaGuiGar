<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = "products";
    protected $fillable = ['name','description','price','photo'];

    public function getDescriptionAttribute($value){
        return ucfirst(strtolower($value));
    }

    /* propiedad virtual  tema_con_enlace
    public function getTemaConEnlace(){
        return $this->tema . "" . $this->enlace;
    }
    */

    public function setNameAttribute($value){
        $this->attributes['name'] = mb_strtoupper($value, "UTF-8");
    }
}
