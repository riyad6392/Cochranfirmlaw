<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\ImageManagerStatic;

class NewsController extends Controller
{
    function getAllNews() {
        $news = News::orderBy('id','DESC')->paginate(15);
        return view('admin.news.index')->with('news',$news);
    }

    function  addNewsView(){
        return view('admin.news.add_news');
     }

     function addNewNews(Request $request) {
        if ($request->hasFile('image')) {
            $imageName = $request->file('image')->hashName();
            $originalImage = $request->file('image');
            $webpImagePath = 'storage/news/' . pathinfo($imageName, PATHINFO_FILENAME) . '.webp';

            $img = ImageManagerStatic::make($originalImage);
            $encoded = $img->encode('webp', 80);
            // $encoded->save(public_path($webpImagePath),80,'webp');
            $encoded->save(($webpImagePath),80,'webp');
        }

        News::create([
            'title' => $request->title,
            'posted_by' => $request->posted_by,
            'image' => $webpImagePath,
            'redirect_site_url' => $request->redirect_site_url,
            'description' => $request->description,
            'short_description' => $request->short_description,
            'select_option' => $request->select_option,
            'sub_title' => $request->sub_title,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        return Redirect::route('getAllNews')->with('msg','Record Added');
     }

     function  editNewsView($newsId){
         $news = News::find($newsId);
         return view('admin.news.edit_news')->with('news',$news);
      }

      function updateNews(Request $request,$newsId) {
        $news = News::find($newsId);
        if ($request->hasFile('image')) {
            $imageName = $request->file('image')->hashName();
            $originalImage = $request->file('image');
            $webpImagePath = 'storage/news/' . pathinfo($imageName, PATHINFO_FILENAME) . '.webp';

            $img = ImageManagerStatic::make($originalImage);
            $encoded = $img->encode('webp', 80);
            // $encoded->save(public_path($webpImagePath),80,'webp');
            $encoded->save(($webpImagePath),80,'webp');
        }

        $news->update([
            'title' => $request->title,
            'posted_by' => $request->posted_by,
            'image' => $webpImagePath ?? $news->image,
            'redirect_site_url' => $request->redirect_site_url,
            'description' => $request->description,
            'short_description' => $request->short_description,
        ]);
        return Redirect::route('getAllNews')->with('msg','Record updated');
      }

      function deleteNews($newsId) {
         $news = News::find($newsId);
         $news->delete();
         return Redirect::back()->with('delete','Record Deleted');
      }
}
