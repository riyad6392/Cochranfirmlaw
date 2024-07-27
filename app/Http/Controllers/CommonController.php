<?php

namespace App\Http\Controllers;

use App\Mail\UserEmail;
use App\Models\Accomplisment;
use App\Models\Attorneys;
use App\Models\Blog;
use App\Models\GeneralLink;
use App\Models\HeroSection;
use App\Models\MediaReel;
use App\Models\News;
use App\Models\Opinions;
use App\Models\Media;
use App\Models\OutReach;
use App\Models\PracticeAreas;
use App\Models\Testimonial;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PhpParser\Node\Expr\Cast\String_;
use Illuminate\Support\Str;

class CommonController extends Controller
{
    public function home()
    {
        $attorneys = Attorneys::all();
        $practiceAreas = PracticeAreas::all();
        $news = News::all();
        $testimonials = Testimonial::all();
        $heroSections = HeroSection::where('is_active', true)->first();
        return view('front_end.main', compact('attorneys', 'practiceAreas', 'news', 'testimonials', 'heroSections'));
    }

    function contactUs()
    {
        return view('front_end.contact-us-page');
    }

    public function singleNews($singlenewsId)
    {
        $singlenews = News::find($singlenewsId);
        return view('front_end.single-news')->with('singleNews', $singlenews);
    }

    public function news()
    {
        $news = News::all();
        return view('front_end.news-page')->with('news', $news);
    }

    public function singleOutReach($outReachId)
    {
        $outReach = OutReach::find($outReachId);
        return view('front_end.single-out-reach')->with('outReach', $outReach);
    }

    public function getOutReachs()
    {
        $outReachs = OutReach::all();
        return view('front_end.out-reach-page')->with('outReachs', $outReachs);
    }

    function getBlogs(Request $request)
    {
        $blogs = Blog::paginate(10);
        return view('front_end.blogs-page')->with('blogs', $blogs);
    }

    public function searchBlog(Request $request)
    {
        $search = $request->input('search');

        if (!empty($search)) {
            $blogs = Blog::where('title', 'like', "%$search%")->paginate(5);
            return view('front_end.blogs-page')->with('blogs', $blogs);
        } else {
            // Handle the case when the search term is empty
            return redirect()->route('blogs');
        }
    }


    public function getSingleBlog($slug)
    {
        $singleBlog = Blog::where('slug', $slug)->firstOrFail();
        return view('front_end.single-blogs-page')->with('singleBlog', $singleBlog);
    }

    public function verdictsAndSettlement()
    {
        $verdict = GeneralLink::find(3);
        // return $verdicts;
        return view('front_end.verdicts-and-settlements')->with('verdict', $verdict);
    }

    public function practiceAreas()
    {
        $practices = PracticeAreas::all();
        return view('front_end.practice-area')->with('practices', $practices);
    }

    public function getSinglePractice($practiceId)
    {
        $getPractice = PracticeAreas::find($practiceId);

        return view('front_end.single-practice-area')->with('getPractice', $getPractice);
    }

    public function howWeWork()
    {
        $how_we_work = GeneralLink::find(1);
        return view('front_end.how-we-work')->with('howWeWork', $how_we_work);
    }

    public function mission()
    {
        $mission = GeneralLink::find(2);
        return view('front_end.mission')->with('mission', $mission);
    }

    public function aboutBrian()
    {
        return redirect()->away('https://briandunnlaw.com/');
    }

    public function testimonials()
    {
        $testimonials = Testimonial::all();
        return view('front_end.partials.testimonial');
    }

    public function getSingleAttorney($id)
    {
        $attorney = Attorneys::find($id);
        return view('front_end.attorney-model')->with('attorney', $attorney);
    }

    public function userMessage(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
            'custId' => ['required_if:value,""'],
        ]);
        $contains = Str::contains($request->message, ['http', '@', '.com', '.net', '.org', '.co', '.us', '.co.uk', '.me', '.site', '.gov', '.edu', '.mil', '.info', '.biz', '.io', '.me', '.tv', '.online', '.xyz', '.dev', '.io', '.ai', '.ca', '.jp', '.gg', '.ly', '.ph', '.shop', '.club', '.store', '.fr', '.world', '.live', '.website', '.fun', '.life', '.asia', '.space', '.vip', '.cc', '.tech', '.pro', '.today', '.app', '.art', '.digital', '.work', '.cloud', '.global', '.photography', '.design', '.blog', '.guru', '.law', '.pizza', '.ninja', '.beer', '.game', '.yoga', '.eco', '.music', '.studio', '.fashion', '.travel', '.health', '.pk']);
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message
        ];
        $ccEmails = ["adam.norsworthy@gmail.com"];
        if (!$contains && $request->custId == "") {
            try {
                Mail::to(['intakesca@cochranfirm.com'])->cc($ccEmails)->send(new UserEmail($data));
                // Client Emails
                // adam.norsworthy@gmail.com , intakesca@cochranfirm.com
                return redirect()->back()->with(['success' => 'Email has been sent successfully']);
            } catch (\Exception $e) {
                return redirect()->back()->with(['error' => 'Failed to send email']);
            }
        } else {
            return redirect()->back()->with(['success' => 'Email has been sent successfully']);
        }

    }

    public function opinions()
    {
        $opinions = Opinions::first();
        return view('front_end.opinions')->with('opinions', $opinions);

    }
    public function accomplisments()
    {
        $accomplisments = Accomplisment::first();
        return view('front_end.accomplisment')->with('accomplisments', $accomplisments);

    }
    public function media_reel()
    {
        $media_reels = MediaReel::all();
        return view('front_end.media-reel')->with('media_reels', $media_reels);
    }
    public function medias()
    {
        $medias = Media::all();
        return view('front_end.media')->with('medias', $medias);
    }

}



