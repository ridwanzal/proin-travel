<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CallactionController extends Controller
{
    private $table = 'general_cta';

    public function store(Request $request)
    {

        DB::table($this->table)->insert([
            'cta_text' => $request->cta_text,
            'cta_link' => $request->cta_link,
            'cta_type' => $request->cta_type,
        ]);

        return redirect('/backview/')->with('kontak-success', 'Submission success');;
    }
}
