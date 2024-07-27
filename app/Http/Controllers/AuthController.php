<?php

namespace App\Http\Controllers;

use App\Models\Accomplisment;
use App\Models\Attorneys;
use App\Models\Blog;
use App\Models\HeroSection;
use App\Models\Media;
use App\Models\MediaReel;
use App\Models\News;
use App\Models\Opinions;
use App\Models\PracticeAreas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    //
    function loadView(){
        if (!Auth::check()) {
            return view('admin.pages.sign-in');
        }
        return redirect()->route('dashboard');
    }

    function login(Request $request){
        $credentials =  $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        // return $credentials;
        if(Auth::attempt($credentials))
        {
            return redirect()->route('dashboard');
        }

        return redirect()->back()->with('error','Invalid Credentionals.');
    }

    function logout(){
        Session::flush();
        Auth::logout();
        return redirect()->route('load.view');
    }

    function dashboard(){
//        $newsCount = News::count();
//        $blogsCount = Blog::count();
//        $attorneysCount = Attorneys::count();
//        $practiceAreaCount = PracticeAreas::count();
//        $blogs = Blog::paginate(4);
        $opinionsCount = Opinions::count();
        $mediaCount = Media::count();
        $mediaReelCount = MediaReel::count();
        $accomoplismentCount=Accomplisment::count();
        $heroSectionCount=HeroSection::count();
        return view('admin.index')
              ->with('opinionsCount',$opinionsCount)
              ->with('mediaCount',$mediaCount)
              ->with('mediaReelCount',$mediaReelCount)
              ->with('accomoplismentCount',$accomoplismentCount)
              ->with('heroSectionCount',$heroSectionCount);
    }
}
