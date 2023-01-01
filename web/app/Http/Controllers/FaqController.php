<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FaqController extends Controller
{
    private $table = 'faq';

    public function store(Request $request)
    {

        DB::table($this->table)->insert([
            'title' => $request->title,
            'description' => $request->description
        ]);


        return redirect('/backview/faq')
            ->with('success', 'Submission success');
    }

    public function update(Request $request)
    {
        $id = $request->id;
        DB::table('faq')->where('id', $id)
            ->update([
                'title' => $request->title,
                'description' => $request->description,
            ]);
        return redirect('/backview/faq')
            ->with('success', 'You have successfully updated data');
    }

    public function delete(Request $request)
    {
        $tableId = $request->id;
        DB::select("DELETE FROM $this->table where id = $tableId");
        return back()
            ->with('success', 'You have successfully removed data.');
    }
}
