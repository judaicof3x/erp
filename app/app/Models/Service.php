<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    protected $fillable = [
        'is_active',
        'name',
        'url',
        'category_id',
        'description',
        'amount',
        'amount_min',
        'deadline_deal',
        'deadline_real',
    ];
}
