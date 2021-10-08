<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Barang;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    
    public function index()
    {
        $barang = Barang::all();
        
        if($barang)
        return ResponseFormatter::success($barang, 'Data ditemukan');

        else
        return ResponseFormatter::error(null, 'Data tidak ditemukan', 404);
    }

   
}
