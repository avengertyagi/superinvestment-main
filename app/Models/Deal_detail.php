<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deal_detail extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'deal_id',
        'profile',
        'about',
        'financial',
        'documents',
        'faq',
    ];


    public function deal()
    {
        return $this->belongsTo(Deal::class);
    }
}
