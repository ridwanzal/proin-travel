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
            'image' => $request->image,
            'title' => $request->title,
            'description' => $request->description,
            'type' => $request->type ?? '1'
        ]);

        return redirect('/backview/bonus')->with('success', 'Submission success');;
    }

    public function storeHightlight(Request $request)
    {
        DB::table($this->table_bonus_highlight)->insert([
            'content' => $request->content,
        ]);
        return redirect('/backview/bonus')->with('success', 'Submission success');;
    }

    public function deleteList(Request $request)
    {
        $tableId = $request->id;
        DB::select("DELETE FROM $this->table_bonus_list where id = $tableId");
        return back()
            ->with('success', 'You have successfully remove data.');
    }

    public function deleteHighlight(Request $request)
    {
        $tableId = $request->id;
        DB::select("DELETE FROM $this->table_bonus_highlight where id = $tableId");
        return back()
            ->with('success', 'You have successfully remove data.');
    }
}
