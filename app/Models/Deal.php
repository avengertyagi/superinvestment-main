<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Deal extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'logo_path',
        'banner_path',
        'irr',
        'pre_tax',
        'post_tax',
        'tax',
        'tenure',
        'tenure_type',
        'min_investment',
        'total_investment',
        'investment',
    ];

    /**
     * Scope a query to only completed deals.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeCompleted($query)
    {
        return $query->whereNotNull('completed_at');
    }

    /**
     * Scope a query to only Active deals.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeActive($query)
    {
        return $query->whereNull('completed_at');
    }

    protected static function boot() {
        parent::boot();

        static::creating(function ($deal) {
            $deal->slug = Str::slug($deal->name);
        });
    }


    public function dealDetail()
    {
        return $this->hasOne(Deal_detail::class);
    }


    public function assets()
    {
        return $this->hasMany(Asset::class,'deal_id');
    }
}
