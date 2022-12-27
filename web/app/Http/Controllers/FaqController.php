<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FaqController extends Controller
{   
    private $table = 'dokumentasi';

    public function store(Request $request)
    {

        DB::table($this->table)->insert([
            'title' => $request->title,
            'description' => $request->description
        ]);

        return redirect('/kontak')->with('kontak-success', 'Submission success');;
    }
}
