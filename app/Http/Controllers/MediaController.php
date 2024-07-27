<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOpinionRequest;
use App\Models\HeroSection;
use App\Models\MediaReel;
use App\Models\Media;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\CreateMediaRequest;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $medias = Media::paginate(10);
        return view('admin.media.index')->with('medias', $medias);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.media.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateMediaRequest $mediaRequest): RedirectResponse
    {


        if ($mediaRequest->hasFile('thumbal')) {
            $imageData = $mediaRequest->file('thumbal');
            $storedImagePath = Storage::putFile('public/media-reel-images', $imageData, 'public');

//            $manager = new ImageManager(new Driver());
//            $getImagePath = Storage::get($storedImagePath);
//            $thumbal = $manager->read($getImagePath)->resize(1920, 575);
//            $thumbal->toJpeg()->save(Storage::path($storedImagePath));

            $mediaRequest->thumbal = $storedImagePath;
        }

        Media::create([
            'title' =>  $mediaRequest->title,
            'video_link' =>  $mediaRequest->video_link,
            'thumbal' =>  $mediaRequest->thumbal,
            'short_description' => $mediaRequest->short_description,
            'description' => $mediaRequest->description,
        ]);

        return redirect()->route('media.index')->with('success', 'Media  created successfully');
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
        //
        $medias = Media::find($id);
        return view('admin.media.edit', ['medias' => $medias]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'video_link' => 'nullable|string',
            'thumbal' => 'nullable|image|max:1024',
            'short_description' => 'nullable|string',
            'description' => 'nullable|string',
        ]);

        $medias = Media::find($id);
        $storedImagePath = '';

        if ($request->hasFile('thumbal')) {
            if ($medias->thumbal) {
                Storage::delete($medias->thumbal);
            }

            $imageData = $request->file('thumbal');
            $storedImagePath = Storage::putFile('public/media-reel-images', $imageData, 'public');

//            $manager = new ImageManager(new Driver());
//            $getImagePath = Storage::get($storedImagePath);
//            $thumbal = $manager->read($getImagePath)->resize(1920, 575);
//            $thumbal->toJpeg()->save(Storage::path($storedImagePath));

        }
        else
        {
            $storedImagePath = $medias->thumbal;
        }


//        dd($request->all());
        $medias->update([
            'title' => $request->title,
            'video_link' => $request->video_link,
            'thumbal' => $storedImagePath,
            'short_description'=>$request->short_description,
            'description'=>$request->description,
        ]);
        //dd($opinions->image);

        return redirect()->route('media.index')->with('success', 'Media  updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $medias = Media::find($id);
        $medias->delete();
        return redirect()->route('media.index')->with('delete', 'Media  deleted successfully');
    }
}
