<?php

namespace App\Http\Controllers;

class TransactionController extends Controller
{
    public function create()
    {
        $waktu = now()->format('H:i:s');
        
        return "Halaman kasir dibuka pukul {$waktu}";
}

    public function riwayat()
    {
        return 'Riwayat kasir';
    }
}