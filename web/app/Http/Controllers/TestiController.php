<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestiController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'images.*' => 'required|max:1000480',
            'content' => 'required',
            'subtitle' => 'required',
            'type' => 'required',
        ]);

        $images = [];
        if ($request->images) {
            foreach ($request->images as $key => $image) {
                $imageName = time() . rand(1, 99) . '.' . $image->extension();
                $image->move(public_path('images/uploads'), $imageName);
                $images[]['name'] = $imageName;
                DB::table('testimoni')->insert([
                    'image' => $imageName,
                    'content' => $request->content,
                    'subtitle' => $request->subtitle,
                    'type' => $request->type ?? '1'
                ]);
            }
        }

        return back()
            ->with('success', 'You have successfully upload image.')
            ->with('images', $images);
    }

    public function update(Request $request)
    {
        $id = $request->id;
        DB::table('testimoni')->where('id', $id)
            ->update([
                'content' => $request->content,
                'subtitle' => $request->subtitle,
                'type' => $request->type ?? '1'
            ]);
        return redirect('/backview/testimoni')
            ->with('success', 'You have successfully updated data');
    }

    public function updateimage(Request $request)
    {
        $request->validate([
            'images.*' => 'required|max:1000480',
        ]);

        $id = $request->id;
        $images = [];
        if ($request->images) {
            foreach ($request->images as $key => $image) {
                $imageName = time() . rand(1, 99) . '.' . $image->extension();
                $image->move(public_path('images/uploads'), $imageName);
                $images[]['name'] = $imageName;
                DB::table('testimoni')->where('id', $id)
                    ->update([
                        'image' => $imageName,
                    ]);
            }
        }

        return back()
            ->with('success', 'You have successfully uploaded data.')
            ->with('images', $images);
    }


    public function delete(Request $request)
    {
        $tableId = $request->id;
        DB::select("DELETE FROM testimoni where id = $tableId");
        return back()
            ->with('success', 'You have successfully remove data.');
    }
}
