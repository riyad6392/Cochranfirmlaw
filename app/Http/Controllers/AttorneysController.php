<?php

namespace App\Http\Controllers;

use App\Models\Attorneys;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic;

class AttorneysController extends Controller
{

    function getAllAttornys() {
        $attornys = Attorneys::orderBy('id','DESC')->paginate(15);
        return view('admin.attorney.index')->with('attorneys',$attornys);
    }

    function getAttorny($attornyId) {
        Storage::url('jfgshdg');
      $attorny = Attorneys::find($attornyId);
      return view('front_end.attorney')->with('attorney',$attorny);
    }

    function  addAttornyView(){
       return view('admin.attorney.add_attorny');
    }

    function addNewAttorny(Request $request) {

      if ($request->hasFile('avatar')) {
            $imageName = $request->file('avatar')->hashName();
            $originalImage = $request->file('avatar');
            $webpImagePath = 'storage/attornys/' . pathinfo($imageName, PATHINFO_FILENAME) . '.webp';

            $img = ImageManagerStatic::make($originalImage);
            $encoded = $img->encode('webp', 80);
            // $encoded->save(public_path($webpImagePath),80,'webp');
            $encoded->save(($webpImagePath),80,'webp');
      }

      if ($request->hasFile('display_img')){
        $display_image = $request->file('display_img')->hashName();
        $original_image = $request->file('display_img');
        $display_image_path = 'storage/attornys/' . pathinfo($display_image, PATHINFO_FILENAME) . '.webp';

        $img = ImageManagerStatic::make($original_image);
        $encoded = $img->encode('webp', 80);
        // $encoded->save(public_path($display_image_path),80, 'webp');
        $encoded->save(($display_image_path),80, 'webp');
      }

      Attorneys::create([
        'name' => $request->name,
        'role' => $request->role,
        'avatar' => $webpImagePath,
        'display_img' => $display_image_path,
        'about_head_one' => $request->about_head_one,
        'about_head_two' => $request->about_head_two,
        'bio' => $request->bio,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ]);
      return Redirect::route('getAllAttornys')->with('msg','Record Added');
    }

    function  editAttornyView($attornyId){
        $attorny = Attorneys::find($attornyId);
        return view('admin.attorney.edit_attorny')->with('attorny',$attorny);
     }

     function updateAttorny(Request $request,$attornyId) {
        $attorny = Attorneys::find($attornyId);
        if ($request->hasFile('avatar')) {
            $imageName = $request->file('avatar')->hashName();
            $originalImage = $request->file('avatar');
            $webpImagePath = 'storage/attornys/' . pathinfo($imageName, PATHINFO_FILENAME) . '.webp';

            $img = ImageManagerStatic::make($originalImage);
            $encoded = $img->encode('webp', 80);
            // $encoded->save(public_path($webpImagePath),80,'webp');
            $encoded->save(($webpImagePath),80,'webp');
        }

        if ($request->hasFile('display_img')){
          $display_image = $request->file('display_img')->hashName();
          $original_image = $request->file('display_img');
          $display_image_path = 'storage/attornys/' . pathinfo($display_image, PATHINFO_FILENAME) . '.webp';

          $img = ImageManagerStatic::make($original_image);
          $encoded = $img->encode('webp', 80);
          // $encoded->save(public_path($display_image_path),80, 'webp');
          $encoded->save(($display_image_path),80, 'webp');
        }

        $attorny->update([
            'name' => $request->name,
            'role' => $request->role,
            'avatar' => $webpImagePath ?? $attorny->avatar,
            'display_img' => $display_image_path,
            'about_head_one' => $request->about_head_one,
            'about_head_two' => $request->about_head_two,
            'bio' => $request->bio,
        ]);
        return Redirect::route('getAllAttornys')->with('msg','Record updated');
     }

     function deleteAttorny($attornyId) {
        $attorny = Attorneys::find($attornyId);
        $attorny->delete();
        return Redirect::back()->with('delete','Record Deleted');
     }
}
