<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description',
        'icon',
    ];

    /**
     * Mendefinisikan relasi "one-to-many" ke ServiceDetail.
     * Satu Service (kategori) bisa memiliki banyak detail layanan.
     */
    public function details()
    {
        return $this->hasMany(ServiceDetail::class);
    }
}