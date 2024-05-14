<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class TimestampController extends Controller
{
    public function convert()
    {
        // Mengambil tanggal hari ini
        $today = Carbon::now();

        // Format tanggal bulan dan tahun
        $format1 = $today->format('d F Y'); // Contoh: 14 Mei 2024

        // Format bulan panjang dan pendek
        $format2_long = $today->format('F'); // Contoh: Mei
        $format2_short = $today->format('M'); // Contoh: Mei

        // Format lengkap dengan jam menit dan detik
        $format3 = $today->format('d F Y H:i:s'); // Contoh: 14 Mei 2024 15:30:45

        // Format hanya tanggal saja
        $format4 = $today->format('d F Y'); // Contoh: 14 Mei 2024

        return view('timestamp', compact('format1', 'format2_long', 'format2_short', 'format3', 'format4'));
    }
}
