<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DokController extends Controller
{
    private $table = 'dokumentasi';

    public function store(Request $request)
    {

        DB::table($this->table)->insert([
            'image' => $request->image,
        ]);

        return redirect('/kontak')->with('kontak-success', 'Submission success');;
    }
}
