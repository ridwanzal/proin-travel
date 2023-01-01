<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaketController extends Controller
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
                DB::table('paket')->insert([
                    'image' => $imageName,
                    'title' => $request->title,
                    'content' => $request->content,
                    'price' => $request->price,
                    'cta' => $request->cta,
                    'cta_info' => $request->cta_info
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
        DB::table('paket')->where('id', $id)
            ->update([
                'title' => $request->title,
                'content' => $request->content,
                'price' => $request->price,
                'cta' => $request->cta,
                'cta_info' => $request->cta_info
            ]);

        return back()
            ->with('success', 'You have successfully updated data.');
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
                DB::table('paket')->where('id', $id)
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
        DB::select("DELETE FROM paket where id = $tableId");
        return back()
            ->with('success', 'You have successfully removed data.');
    }
}
