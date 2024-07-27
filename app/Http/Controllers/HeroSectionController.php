<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateHeroSectionRequest;
use App\Models\HeroSection;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use App\Services\ImageService;
use Intervention\Image\Drivers\GD\Driver;

class HeroSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function index()
    {
        //$heroSections = HeroSection::paginate(10);
        $heroSections = HeroSection::with('user')->paginate(10);
        return view('admin.hero_section.index')->with('heroSections', $heroSections);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.hero_section.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateHeroSectionRequest $heroSectionRequest): RedirectResponse
    {
        HeroSection::query()->update(['is_active' => false]);

        if ($heroSectionRequest->hasFile('image')) {
            $imageData = $heroSectionRequest->file('image');
            $storedImagePath = Storage::putFile('public/hero-section-images', $imageData, 'public');

//            $manager = new ImageManager(new Driver());
//            $getImagePath = Storage::get($storedImagePath);
//            $image = $manager->read($getImagePath)->resize(1920, 575);
//            $image->toJpeg()->save(Storage::path($storedImagePath));

            $heroSectionRequest->image = $storedImagePath;
        }


        HeroSection::create([
            'title' => $heroSectionRequest->title,
            'sub_title' => $heroSectionRequest->sub_title,
            'image' => $heroSectionRequest->image,
            'learn_more_link' => $heroSectionRequest->learn_more_link,
            'contact_us_link' => $heroSectionRequest->contact_us_link,
            'is_active' => true,
        ]);

        return redirect()->route('hero-section.index')->with('success', 'Hero section created successfully');
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
        $heroSection = HeroSection::find($id);
        return view('admin.hero_section.edit', ['heroSection' => $heroSection]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HeroSection $heroSection)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'sub_title' => 'nullable|string|max:255',
            'image' => 'nullable|image|max:1024',
            'learn_more_link' => 'nullable|string|max:255',
            'contact_us_link' => 'nullable|string|max:255',
            'is_active' => 'sometimes|boolean',
        ]);

        // Check if the request contains a new image
        if ($request->hasFile('image')) {
            if ($heroSection->image) {
                Storage::delete($heroSection->image);
            }

            $imageData = $request->file('image');
            $storedImagePath = Storage::putFile('public/hero-section-images', $imageData, 'public');

//            $manager = new ImageManager(new Driver());
//            $getImagePath = Storage::get($storedImagePath);
//            $image = $manager->read($getImagePath)->resize(1920, 575);
//            $image->toJpeg()->save(Storage::path($storedImagePath));

            $heroSection->image = $storedImagePath;
        }

        ///TODO: if is_active is true then other column should be false automatically

        $heroSection->update([
            'title' => $request->title,
            'sub_title' => $request->sub_title,
            'image' => $heroSection->image ?? '',
            'learn_more_link' => $request->learn_more_link,
            'contact_us_link' => $request->contact_us_link,
        ]);

        return redirect()->route('hero-section.index')->with('success', 'Hero section updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $heroSection = HeroSection::find($id);

        if ($heroSection->image) {
            Storage::delete($heroSection->image);
        }
        $wasActive = $heroSection->is_active;
        $heroSection->delete();

        if ($wasActive) {
            $newActiveHeroSection = HeroSection::first();
            if ($newActiveHeroSection) {
                $newActiveHeroSection->is_active = true;
                $newActiveHeroSection->save();
            }
        }

        return redirect()->route('hero-section.index')->with('delete', 'Hero section deleted successfully');
    }

    public function activeHeroSection($id){
        $heroSection = HeroSection::find($id);
        if ($heroSection){
            HeroSection::query()->update(['is_active' => false]);
            $heroSection->is_active = !$heroSection->is_active;
            $heroSection->save();
        }

        return redirect()->route('hero-section.index')->with('success', 'Hero section active successfully');
    }
}
