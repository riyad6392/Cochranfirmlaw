<?php

namespace App\Http\Controllers;

use App\Models\GeneralLink;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\ImageManagerStatic;

class GeneralLinkController extends Controller
{
    function getAllGeneralLinks() {
        $generalLinks = GeneralLink::orderBy('id','DESC')->paginate(15);
        return view('admin.general_link.index')->with('generalLinks',$generalLinks);
    }

    function  addGeneralLinkView(){
        return view('admin.general_link.add_general_link');
    }

    function addNewGeneralLink(Request $request) {
        $validated = $request->validate([
            'banner_image' => 'required|mimes:jpeg,png,jpg,gif,webp|dimensions:min_width=1920,min_height=575 ,max_width=2000,max_height=2000'
        ]);
        if(!$validated){
            return view('getAllParacticeAreas')->with('error','error');
        }
        
        if ($request->hasFile('banner_image')) {
            $imageName = $request->file('banner_image')->hashName();
            $originalImage = $request->file('banner_image');
            $contentImagePath = 'storage/general_links/' . pathinfo($imageName, PATHINFO_FILENAME) . '.webp';

            $img = ImageManagerStatic::make($originalImage);
            $encoded = $img->encode('webp', 80);
            // $encoded->save(public_path($contentImagePath),80,'webp');
            $encoded->save(($contentImagePath),80,'webp');
        }

        if ($request->hasFile('content_image')) {
            $imageName = $request->file('content_image')->hashName();
            $originalImage = $request->file('content_image');
            $bannerImagePath = 'storage/general_links/' . pathinfo($imageName, PATHINFO_FILENAME) . '.webp';

            $img = ImageManagerStatic::make($originalImage);
            $encoded = $img->encode('webp', 80);
            // $encoded->save(public_path($bannerImagePath),80,'webp');
            $encoded->save(($bannerImagePath),80,'webp');
        }

        GeneralLink::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'banner_image' => $bannerImagePath,
            'content_image' => $contentImagePath,
            'description' => $request->description,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        return Redirect::route('getAllGeneralLinks')->with('msg','Record Added');
    }

    function  editGeneralLinkView($generalLinkID){
        $generalLink = GeneralLink::find($generalLinkID);
         return view('admin.general_link.edit_general_link')->with('generalLink',$generalLink);
    }

    function updateGeneralLink(Request $request,$generalLinkID) {
         $generalLink = GeneralLink::find($generalLinkID);
         if ($request->hasFile('image')) {
             $imageName = $request->file('image')->hashName();
             $originalImage = $request->file('image');
             $bannerImagePath = 'storage/general_links/' . pathinfo($imageName, PATHINFO_FILENAME) . '.webp';

             $img = ImageManagerStatic::make($originalImage);
             $encoded = $img->encode('webp', 80);
             $encoded->save(public_path($bannerImagePath),80,'webp');
         }

         if ($request->hasFile('image')) {
             $imageName = $request->file('image')->hashName();
             $originalImage = $request->file('image');
             $contentImagePath = 'storage/general_links/' . pathinfo($imageName, PATHINFO_FILENAME) . '.webp';

             $img = ImageManagerStatic::make($originalImage);
             $encoded = $img->encode('webp', 80);
            //  $encoded->save(public_path($contentImagePath),80,'webp');
            $encoded->save(($contentImagePath),80,'webp');
         }
        // return $request;
         $generalLink->update([
             'title' => $request->title,
             'slug' => Str::slug($request->title),
             'banner_image' => $bannerImagePath ?? $generalLink->banner_image,
             'content_image' => $contentImagePath ?? $generalLink->content_image,
             'description' => $request->description,
         ]);
         return Redirect::route('getAllGeneralLinks')->with('msg','Record updated');
    }

    function deleteGeneralLink($generalLinkID) {
         $generalLink = GeneralLink::find($generalLinkID);
         $generalLink->delete();
         return Redirect::back()->with('delete','Record Deleted');
    }
}
