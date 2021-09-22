<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'asset_id',
        'currency',
        'status',
        'method',
        'description',
        'is_captured',
        'amount',
        'razor_fee',
        'tax',
        'email',
        'contact',
        'paid_at',
        'payment_id',
    ];

    protected $casts = [
        'paid_at'=>'datetime'
    ];

    public function asset()
    {
        return $this->belongsTo(Asset::class,'asset_id','asset_id');
    }
}
