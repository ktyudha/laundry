<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'no_hp',
        'category_id',
        'paket_id',
        'status',
        'jumlah',
        'sumofprice',
    ];

    public function category()
    {
        return $this->belongsTo(related: Category::class);
    }
    public function paket()
    {
        return $this->belongsTo(related: Paket::class);
    }
}
