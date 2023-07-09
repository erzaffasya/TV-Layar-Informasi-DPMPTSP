<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;
    protected $table = 'layanan';
    protected $fillable = [
        'nama_layanan', 'deskripsi', 'lokasi',
        'persyaratan', 'logo', 'foto', 'senin_kamis','jumat','detail_layanan'
    ];

    protected $primaryKey = 'id';

    public function detail_layanan()
    {
        return $this->hasMany(DetailLayanan::class,'layanan_id');
    }
}
