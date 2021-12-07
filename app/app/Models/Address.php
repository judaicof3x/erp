<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'address',
        'number',
        'complement',
        'neighborhood',
        'city',
        'state',
        'zip_code',
        'tenant_address',
        'tenant_number',
        'tenant_complement',
        'tenant_neighborhood',
        'tenant_city',
        'tenant_state',
        'tenant_zip_code',
        'description'
    ];

    public function client()
    {
        $this->belongsTo(Client::class);
    }
}
