<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DokController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'images.*' => 'required|max:1000480',
        ]);

        $images = [];
        if ($request->images) {
            foreach ($request->images as $key => $image) {
                $imageName = time() . rand(1, 99) . '.' . $image->extension();
                $image->move(public_path('images/uploads'), $imageName);
                $images[]['name'] = $imageName;
                DB::table('dokumentasi')->insert([
                    'image' => $imageName,
                ]);
            }
        }

        return back()
            ->with('success', 'You have successfully upload image.')
            ->with('images', $images);
    }

    public function delete(Request $request)
    {
        $tableId = $request->id;
        DB::select("DELETE FROM dokumentasi where id = $tableId");
        return back()
            ->with('success', 'You have successfully remove data.');
    }
}
