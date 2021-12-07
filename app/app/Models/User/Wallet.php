<?php

namespace App\Models\User;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'coin_id',
        'amount'
    ];

    public function coin()
    {
        $this->belongsToMany(Coin::class);
    }

    public function user()
    {
        $this->belongsToMany(User::class);
    }
}
