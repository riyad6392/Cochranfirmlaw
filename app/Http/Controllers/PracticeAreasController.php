<?php

namespace App\Http\Controllers;

use App\Models\PracticeAreas;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\ImageManagerStatic;

class PracticeAreasController extends Controller
{
    //
    function getAllParacticeAreas() {
        $practiceAreas = PracticeAreas::orderBy('id','DESC')->paginate(15);
        return view('admin.practice_area.index')->with('practiceAreas',$practiceAreas);
    }

    function  addPracticAreaView(){
        return view('admin.practice_area.add_practice_area');
    }

    function addNewPracticArea(Request $request) {
        // return $request;
        $validated = $request->validate([
            'banner_image' => 'required|mimes:jpeg,png,jpg,gif,webp|dimensions:min_width=1920,min_height=575 ,max_width=2000,max_height=2000'
        ]);
        if(!$validated){
            return view('getAllParacticeAreas')->with('error','error');
        }
        
        if ($request->hasFile('banner_image')) {
            $imageName = $request->file('banner_image')->hashName();
            $originalImage = $request->file('banner_image');
            $contentImagePath = 'storage/practice_areas/' . pathinfo($imageName, PATHINFO_FILENAME) . '.webp';

            $img = ImageManagerStatic::make($originalImage);
            $encoded = $img->encode('webp', 80);
            // $encoded->save(public_path($contentImagePath),80,'webp');
            $encoded->save(($contentImagePath),80,'webp');
        }

        if ($request->hasFile('content_image')) {
            $imageName = $request->file('content_image')->hashName();
            $originalImage = $request->file('content_image');
            $bannerImagePath = 'storage/practice_areas/' . pathinfo($imageName, PATHINFO_FILENAME) . '.webp';

            $img = ImageManagerStatic::make($originalImage);
            $encoded = $img->encode('webp', 80);
            // $encoded->save(public_path($bannerImagePath),80,'webp');
            $encoded->save(($bannerImagePath),80,'webp');
        }

        PracticeAreas::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'banner_image' => $bannerImagePath,
            'content_image' => $contentImagePath,
            'short_description'=> $request->short_description,
            'description' => $request->description,
            'practice_area_type' => $request->practice_area_type,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        return Redirect::route('getAllParacticeAreas')->with('msg','Record Added');
    }

    function  editPracticAreaView($practiceAreaId){
        $practiceArea = PracticeAreas::find($practiceAreaId);
         return view('admin.practice_area.edit_practice_area')->with('practiceArea',$practiceArea);
    }

    function updatePracticeArea(Request $request,$practiceAreaId) {
         $practiceArea = PracticeAreas::find($practiceAreaId);
         if ($request->hasFile('image')) {
             $imageName = $request->file('image')->hashName();
             $originalImage = $request->file('image');
             $bannerImagePath = 'storage/practice_areas/' . pathinfo($imageName, PATHINFO_FILENAME) . '.webp';

             $img = ImageManagerStatic::make($originalImage);
             $encoded = $img->encode('webp', 80);
            //  $encoded->save(public_path($bannerImagePath),80,'webp');
            $encoded->save(($bannerImagePath),80,'webp');
         }

         if ($request->hasFile('image')) {
             $imageName = $request->file('image')->hashName();
             $originalImage = $request->file('image');
             $contentImagePath = 'storage/practice_areas/' . pathinfo($imageName, PATHINFO_FILENAME) . '.webp';

             $img = ImageManagerStatic::make($originalImage);
             $encoded = $img->encode('webp', 80);
            //  $encoded->save(public_path($contentImagePath),80,'webp');
            $encoded->save(($contentImagePath),80,'webp');
         }
        // return $request;
         $practiceArea->update([
             'title' => $request->title,
             'slug' => Str::slug($request->title),
             'banner_image' => $bannerImagePath ?? $practiceArea->banner_image,
             'content_image' => $contentImagePath ?? $practiceArea->content_image,
             'short_description'=> $request->short_description,
             'description' => $request->description,
            'practice_area_type' => $request->practice_area_type,

         ]);
         return Redirect::route('getAllParacticeAreas')->with('msg','Record updated');
    }

    function deletePracticArea($practiceAreaId) {
         $practiceArea = PracticeAreas::find($practiceAreaId);
         $practiceArea->delete();
         return Redirect::back()->with('delete','Record Deleted');
    }
}
