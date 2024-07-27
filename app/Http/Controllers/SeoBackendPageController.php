<?php

namespace App\Http\Controllers;

use App\Models\SeoBackendPage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;

class SeoBackendPageController extends Controller
{
    public function myslug($slug){
        $myslug = SeoBackendPage::where('slug',$slug)->first();
        return $myslug->title;
    }
    function  addBlogView(){
        return view('admin.seobackendpages.add-page');
     }
    public function createBackedEndSeoPage(Request $request) {
        $request->validate([
            'title' => 'required',
            'head_one' => 'required',
            'head_two' => 'required',
            'description' => 'required'
        ]);

        $newPage = SeoBackendPage::create([
            'title' => $request->title,
            'head_one' => $request->head_one,
            'head_two' => $request->head_two,
            'description' => $request->description,
            'slug' => Str::slug($request->slug)
        ]);
        return Redirect::route('get.all.pages')->with('msg','Record Added');
       
    }

    public function getPageBySlug(String $slug) {
        
        $data = SeoBackendPage::where('slug',$slug)->first();
        if(!$data) {
            return redirect()->route('home');
        }
        return view('front_end.seo-backend-pages.criminal-law-in-anaheim')->with('data',$data);
    }

    public function getAllPages() {
        $pages = SeoBackendPage::all();
        return view('admin.seobackendpages.index')->with('pages', $pages);
    }

    public function editPage($id) {
        $page = SeoBackendPage::find($id);
        return view('admin.seobackendpages.edit-page')->with('data', $page);

    }

    public function updateRecord(Request $request, $id) {
        $page = SeoBackendPage::find($id);
        $page->update([
            'head_one' => $request->head_one,
            'head_two' => $request->head_two,
            'title' => $request->ttile,
            'slug' => $request->slug,
            'description' => $request->description
        ]);

        return Redirect::route('get.all.pages')->with('msg','Record updated');
    }

    public function deleteRecord($id) {
        $page = SeoBackendPage::find($id);
        $page->delete();
        return Redirect::route('get.all.pages')->with('delete', 'Record deleted');
    }
}
