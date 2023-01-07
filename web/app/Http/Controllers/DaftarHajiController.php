<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DaftarHajiController extends Controller
{
    private $table = 'daftar_haji';

    public function store(Request $request)
    {
        DB::table($this->table)->insert([
            'nama' => $request->nama ?? '-',
            'whatsapp' => $request->whatsapp ?? '-',
            'domisili' => $request->domisili ?? '-',
            'created_at' => new \DateTime()
        ]);

        return back()
        ->with('success', 'Submission success');;
    }
}
