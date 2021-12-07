<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'is_active',
        'first_name',
        'last_name',
        'cpf',
        'rg',
        'nationality',
        'civil_status',
        'occupation',
        'phone',
        'cel',
        'email',
        'segment',
        'type',
        'tenant_fantasy_name',
        'tenant_cnpj',
        'tenant_corporate_reason',
        'tenant_email',
        'tenant_phone',
        'tenant_cell',
        'deleted_by',
        'created_by'
    ];

    public function address()
    {
        return $this->hasMany(Address::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }
}
