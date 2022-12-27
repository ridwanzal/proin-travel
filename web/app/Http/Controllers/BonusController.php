<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BonusController extends Controller
{

    private $table_bonus_list = 'bonus_list';
    private $table_bonus_highlight = 'bonus_highlight';

    public function storeList(Request $request)
    {

        DB::table($this->table_bonus_list)->insert([
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

    public function storeHightlight(Request $request)
    {
        DB::table($this->table_bonus_highlight)->insert([
            'content' => $request->content,
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        return redirect('/kontak')->with('kontak-success', 'Submission success');;
    }
}
