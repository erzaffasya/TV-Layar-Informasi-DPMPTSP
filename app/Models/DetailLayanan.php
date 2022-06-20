<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailLayanan extends Model
{
    use HasFactory;
    protected $table = 'detail_layanan';
    protected $fillable = [
        'jenis_layanan','deskripsi','file','foto','layanan_id'
    ];

    protected $primaryKey = 'id';

    public function layanan(){
        $this->belongsTo(Layanan::class,'layanan_id','id');
    }
}