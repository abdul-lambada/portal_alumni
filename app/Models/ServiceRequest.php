<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_id',
        'nama',
        'angkatan',
        'layanan',
        'pesan',
        'status',
        'ip_address',
        'user_agent',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
