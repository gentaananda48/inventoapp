<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    //use HasFactory;
    protected $fillable = [
        'nama_barang', 'jumlah', 'rencana_pesanan', 'status'
    ];

    protected $table = 'barangs';

    public function rules()
    {
        //
    }

}
