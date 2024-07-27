<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOpinionRequest;
use App\Models\HeroSection;
use App\Models\MediaReel;
use App\Models\Opinions;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\CreateMediaReelRequest;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class MediaReelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $media_reels = MediaReel::paginate(10);
        return view('admin.media_reel.index')->with('media_reels', $media_reels);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       // $media_reels = MediaReel::paginate(10);
        return view('admin.media_reel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateMediaReelRequest $mediaReelRequest): RedirectResponse
    {


        if ($mediaReelRequest->hasFile('thumbal')) {
            $imageData = $mediaReelRequest->file('thumbal');
            $storedImagePath = Storage::putFile('public/media-reel-images', $imageData, 'public');

//            $manager = new ImageManager(new Driver());
//            $getImagePath = Storage::get($storedImagePath);
//            $image = $manager->read($getImagePath)->resize(1920, 575);
//            $image->toJpeg()->save(Storage::path($storedImagePath));

            $mediaReelRequest->thumbal = $storedImagePath;
        }

        MediaReel::create([
            'title' =>  $mediaReelRequest->title,
            'video_link' =>  $mediaReelRequest->video_link,
            'thumbal' =>  $mediaReelRequest->thumbal,
        ]);

        return redirect()->route('media-reel.index')->with('success', 'Media Reel created successfully');
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
        $media_reels = MediaReel::find($id);
        return view('admin.media_reel.edit', ['media_reels' => $media_reels]);

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
        ]);

        $media_reels = MediaReel::find($id);
        $storedImagePath = '';

        if ($request->hasFile('thumbal')) {
            if ($media_reels->thumbal) {
                Storage::delete($media_reels->thumbal);
            }

            $imageData = $request->file('thumbal');
            $storedImagePath = Storage::putFile('public/media-reel-images', $imageData, 'public');

//            $manager = new ImageManager(new Driver());
//            $getImagePath = Storage::get($storedImagePath);
//            $thumbal = $manager->read($getImagePath)->resize(1920, 575);
//            $thumbal->toJpeg()->save(Storage::path($storedImagePath));

        } else {
            $storedImagePath = $media_reels->thumbal;
        }


//        dd($request->all());
        $media_reels->update([
            'title' => $request->title,
            'video_link' => $request->video_link,
            'thumbal' => $storedImagePath,
        ]);
        //dd($opinions->image);

        return redirect()->route('media-reel.index')->with('success', 'Media Reel updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $media_reels = MediaReel::find($id);
        $media_reels->delete();
        return redirect()->route('media-reel.index')->with('delete', 'Media Reel deleted successfully');
    }
}
