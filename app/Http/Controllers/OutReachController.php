<?php

namespace App\Http\Controllers;

use App\Models\OutReach;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\ImageManagerStatic;

class OutReachController extends Controller
{
    function getAllOutReachs() {
        $outReachs = OutReach::orderBy('id','DESC')->paginate(15);
        return view('admin.out_reach.index')->with('outReachs',$outReachs);
    }

    function  addOutReachView(){
        return view('admin.out_reach.add_out_reach');
     }

     function addNewOutReach(Request $request) {
        if ($request->hasFile('image')) {
            $imageName = $request->file('image')->hashName();
            $originalImage = $request->file('image');
            $webpImagePath = 'storage/out_reach/' . pathinfo($imageName, PATHINFO_FILENAME) . '.webp';

            $img = ImageManagerStatic::make($originalImage);
            $encoded = $img->encode('webp', 80);
            // $encoded->save(public_path($webpImagePath),80,'webp');
            $encoded->save(($webpImagePath),80,'webp');
        }

        OutReach::create([
            'title' => $request->title,
            'posted_by' => $request->posted_by,
            'image' => $webpImagePath,
            'redirect_site_url' => $request->redirect_site_url,
            'description' => $request->description,
            'short_description' => $request->short_description,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        return Redirect::route('getAllOutReachs')->with('msg','Record Added');
    }

    function  editOutReachView($outReachId){
         $outReach = OutReach::find($outReachId);
         return view('admin.out_reach.edit_out_reach')->with('outReach',$outReach);
    }

    function updateOutReach(Request $request,$outReachId) {
        $outReach = OutReach::find($outReachId);
        if ($request->hasFile('image')) {
            $imageName = $request->file('image')->hashName();
            $originalImage = $request->file('image');
            $webpImagePath = 'storage/out_reach/' . pathinfo($imageName, PATHINFO_FILENAME) . '.webp';

            $img = ImageManagerStatic::make($originalImage);
            $encoded = $img->encode('webp', 80);
            // $encoded->save(public_path($webpImagePath),80,'webp');
            $encoded->save(($webpImagePath),80,'webp');
        }

        $outReach->update([
            'title' => $request->title,
            'posted_by' => $request->posted_by,
            'image' => $webpImagePath ?? $outReach->image,
            'redirect_site_url' => $request->redirect_site_url,
            'description' => $request->description,
            'short_description' => $request->short_description,
        ]);
        return Redirect::route('getAllOutReachs')->with('msg','Record updated');
    }

    function deleteOutReach($outReachId) {
         $outReach = OutReach::find($outReachId);
         $outReach->delete();
         return Redirect::back()->with('delete','Record Deleted');
    }
}
