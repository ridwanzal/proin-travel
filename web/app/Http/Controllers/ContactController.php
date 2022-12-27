<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{

    private $table = 'general_cta';

    public function store(Request $request)
    {

        DB::table($this->table)->insert([
            'nomor_telepon' => $request->nomor_telepon,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'youtube' => $request->youtube,
            'address' => $request->address,
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);

        return redirect('/kontak')->with('kontak-success', 'Submission success');;
    }
}
