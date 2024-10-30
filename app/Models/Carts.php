<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carts extends Model
{
    use HasFactory;

    protected $fillable =[
        // 'user_id',
        // 'product_id',
        // 'quantity',
        // 'price',
    ];
    public function users(){
        return $this->hasMany(User::class);
    }
}