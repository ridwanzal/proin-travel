<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{

    private $table = 'contacts';

    public function store(Request $request)
    {

        DB::table($this->table)->insert([
            'alamat' => $request->alamat ?? '-',
            'nomor_telepon' => $request->nomor_telepon ?? '-',
            'nomor_telepon_alt' => $request->nomor_telepon_alt ?? '-',
            'facebook' => $request->facebook ?? '-',
            'instagram' => $request->instagram ?? '-',
            'youtube' => $request->youtube ?? '-',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);

        return redirect('/backview/kontak')->with('kontak-success', 'Submission success');;
    }
}
