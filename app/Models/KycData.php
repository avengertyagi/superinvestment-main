<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KycData extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'pan_front_path',
        'adhar_front_path',
        'adhar_back_path',
        'bank_account_number',
        'bank_ifsc_code',
        'bank_doc_path',
        'digio_doc_id',
        'txn_id',
        'kyc_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
