<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesananDetail extends Model
{
    use HasFactory;

    public function pesanans()
    {
        return $this->belongsTo(Pesanan::class, 'pesanan_id', 'id');
    }
    
    public function products()
   {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
