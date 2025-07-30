<?php

namespace App\Models; // <-- Diperbaiki dari App.Models

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Service; // <-- Tambahkan baris ini untuk mengimpor Service

class ServiceDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_id',
        'title',
        'description',
        'note',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}