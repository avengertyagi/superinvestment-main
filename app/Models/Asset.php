<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;
    protected $fillable = [
        'asset_id',
        'user_id',
        'deal_id',
        'investment',
        'no_of_returns',
        'tentative_due_date',
        'status',
    ];

    protected $statuses = [
        0 => 'pendiing',
        1 => 'confirmed',
        2 => 'completed'
    ];

    public function getStatus()
    {
        return $this->statuses[$this->status] ?? 'N/A';
    }

    protected $casts = [
        'tentatine_due_date' => 'datetime'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


    public function deal()
    {
        return $this->belongsTo(Deal::class, 'deal_id');
    }

    public function payment()
    {
        return $this->hasOne(Payment::class, 'asset_id', 'asset_id');
    }
}
