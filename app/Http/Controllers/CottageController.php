<?php

namespace App\Http\Controllers;

use App\Models\Cottage;
use Illuminate\Http\Request;

class CottageController extends Controller
{
    //

    public function index()
    {
        $cottages = Cottage::all();

        $imageGallery = [];

        foreach ($cottages as $cottage) {
            $imageGallery[] = [
                'id' => $cottage->id,
                'photo' => $cottage->image_path,
                'location' => $cottage->location,
            ];
        }

        return view('home', [
            'cottages'=> $cottages,
            'imageGallery'=> $imageGallery,
        ]);
    }

    public function show(int $id)
    {
        $cottage = Cottage::findOrFail($id);

        return view('cottage.show', [
            'cottage' => $cottage,
        ]);
    }
}
