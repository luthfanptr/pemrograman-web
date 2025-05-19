<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = ['tenants_id', 'tgl_pembayaran', 'jumlah', 'status_pembayaran'];

    public function tenant()
    {
        return $this->belongsTo(Tenant::class, 'tenants_id');
    }
}
