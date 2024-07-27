<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOpinionRequest;
use App\Models\Opinions;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\GD\Driver;

class OpinionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $opinions = Opinions::paginate(10);
        return view('admin.opinions.index')->with('opinions', $opinions);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $opinions = Opinions::paginate(10);
        return view('admin.opinions.create')->with('opinions', $opinions);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateOpinionRequest $opinionRequest): RedirectResponse
    {
        if ($opinionRequest->hasFile('image')) {
            $imageData = $opinionRequest->file('image');
            $storedImagePath = Storage::putFile('public/opinion-images', $imageData, 'public');

//            $manager = new ImageManager(new Driver());
//            $getImagePath = Storage::get($storedImagePath);
//            $image = $manager->read($getImagePath)->resize(1920, 575);
//            $image->toJpeg()->save(Storage::path($storedImagePath));

            $opinionRequest->image = $storedImagePath;
        }

        Opinions::create([
            'title' => $opinionRequest->title,
            'short_description' => $opinionRequest->short_description,
            'description' => $opinionRequest->description,
            'image' => $opinionRequest->image,
        ]);

        return redirect()->route('opinions.index')->with('success', 'Opinion created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $opinions = Opinions::findOrFail($id);
        return view('admin.opinions.show', ['opinions' => $opinions]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $opinions = Opinions::find($id);
        return view('admin.opinions.edit', ['opinions' => $opinions]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'short_description' => 'nullable|string',
            'description' => 'nullable|string',
            'image' => 'nullable|image|max:1024',
        ]);

        $opinions = Opinions::find($id);
        $storedImagePath = '';

        if ($request->hasFile('image')) {
            if ($opinions->image) {
                Storage::delete($opinions->image);
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
            $storedImagePath = $opinions->image;
        }


//        dd($request->all());
        $opinions->update([
            'title' => $request->title,
            'short_description' => $request->short_description,
            'description' => $request->description,
            'image' => $storedImagePath,
        ]);
        //dd($opinions->image);

        return redirect()->back()->with('success', 'Opinion updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $opinion = Opinions::find($id);

        if ($opinion->image) {
            Storage::delete($opinion->image);
        }

        $opinion->delete();

        return redirect()->route('opinions.index')->with('delete', 'Opinion deleted successfully');
    }
}
