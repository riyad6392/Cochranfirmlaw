<?php

namespace App\Http\Controllers;

use App\Models\Accomplisment;
use App\Models\Opinions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class AccomplismentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $accomplisments = Accomplisment::find($id);
        return view('admin.accomplisments.edit', ['accomplisments' => $accomplisments]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'title' => 'nullable|string|max:255',
            'short_description' => 'nullable|string',
            'description' => 'nullable|string',
            'image' => 'nullable|image|max:1024',
            'video_link' => 'nullable|string',
        ]);

        $accomplisments = Accomplisment::find($id);
        $storedImagePath = '';

        if ($request->hasFile('image')) {
            if ($accomplisments->image) {
                Storage::delete($accomplisments->image);
            }

            $imageData = $request->file('image');
            $storedImagePath = Storage::putFile('public/opinion-images', $imageData, 'public');

//            $manager = new ImageManager(new Driver());
//            $getImagePath = Storage::get($storedImagePath);
//            $image = $manager->read($getImagePath)->resize(1920, 575);
//            $image->toJpeg()->save(Storage::path($storedImagePath));

        }
        else
        {
            $storedImagePath = $accomplisments->image;
        }


//        dd($request->all());
        $accomplisments->update([
            'title' => $request->title,
            'short_description' => $request->short_description,
            'description' => $request->description,
            'image' => $storedImagePath,
            'video_link' => $request->video_link,
        ]);
        //dd($opinions->image);

        return redirect()->back()->with('success', 'Accomplisments updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
