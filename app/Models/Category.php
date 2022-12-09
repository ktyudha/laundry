<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Item;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price'
    ];

    public function items()
    {
        return $this->hasMany(related: Item::class);
    }
    public function orders()
    {
        return $this->hasMany(related: Order::class);
    }
}
