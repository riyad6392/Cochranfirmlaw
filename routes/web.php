<?php

use App\Http\Controllers\AccomplismentController;
use App\Http\Controllers\AttorneysController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommonController;
use App\Http\Controllers\GeneralLinkController;
use App\Http\Controllers\HeroSectionController;
use App\Http\Controllers\OpinionsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\OutReachController;
use App\Http\Controllers\PracticeAreasController;
use App\Http\Controllers\SeoBackendPageController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\MediaReelController;
use App\Http\Controllers\MediaController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

use App\Models\Blog;
use App\Models\SeoBackendPage;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('storage-link', function () {
  Artisan::call('storage:link');
  return 'Storage link created';
});


// User email
Route::post('user/email', [CommonController::class, 'userMessage'])->name('user.email');

Route::get('/', [CommonController::class, 'home'])->name('home');
Route::get('/attorney/{attorneyId}', [AttorneysController::class, 'getAttorny'])->name('getAttorny');
Route::get('/contactUs', [CommonController::class, 'contactUs'])->name('contact.us');
Route::get('news', [CommonController::class, 'news'])->name('news');
Route::get('/news/{singlenewsId}', [CommonController::class, 'singleNews'])->name('single.news');
//
Route::get('outReachs', [CommonController::class, 'getOutReachs'])->name('out.reach');
Route::get('/outReach/{outReachId}', [CommonController::class, 'singleOutReach'])->name('single.out.reach');
//
Route::get('blogs', [CommonController::class, 'getBlogs'])->name('blogs');
Route::get('singleblogs/{slug}', [CommonController::class, 'getSingleBlog'])->name('single.blog');
Route::post('searchBlog', [CommonController::class, 'searchBlog'])->name('search.blog');

Route::get('verdictsAndSettlement', [CommonController::class, 'verdictsAndSettlement'])->name('verdict.settlement');

Route::get('practiceAreas', [CommonController::class, 'practiceAreas'])->name('practice.areas');
Route::get('practiceAreas/{practiceId}', [CommonController::class, 'getSinglePractice'])->name('single.practice');
//
// About Section
Route::get('howWeWork', [CommonController::class, 'howWeWork'])->name('how.we.work');
Route::get('mission', [CommonController::class, 'mission'])->name('mission');
Route::get('aboutBrian', [CommonController::class, 'aboutBrian'])->name('about.brian');
Route::get('my-opinions',[commonController::class, 'opinions'])->name('my-opinions');
Route::get('my-accomplisments',[commonController::class, 'accomplisments'])->name('my-accomplisments');
Route::get('my-media-reel',[commonController::class, 'media_reel'])->name('my-media-reel');
Route::get('my-media',[commonController::class, 'medias'])->name('my-media');

Route::get('johnnie', function () {
  return view('front_end.johnnie-cochran');
});

Route::get('/free-legal-help', function () {
  return view('front_end.legal-site');
});
// about us page link
Route::get('aboutUs', function () {
  return view('front_end.about-us');
});

//make a difference page
Route::get('makeDifference', function () {
  return view('front_end.making-difference');
});

Route::get('/practice', function () {
  return view('front_end.practice-areas');
});

// Testimonial
Route::get('testimonials', [CommonController::class, 'testimonials'])->name('testimonials');

// Radio show redirect route
Route::get('radioShow', function () {
  return redirect()->away('https://nationdividedradio.com/');
});

Route::get('/admin', [AuthController::class, 'loadView'])->name('load.view');
Route::post('/admin/login', [AuthController::class, 'login'])->name('login');

Route::get('singleAttorney/{id}', [CommonController::class, 'getSingleAttorney'])->name('single.attorney');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
  Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
  Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
  Route::get('/getAllAttornys', [AttorneysController::class, 'getAllAttornys'])->name('getAllAttornys');
  Route::get('/getAllBlogs', [BlogController::class, 'getAllBlogs'])->name('getAllBlogs');
  Route::get('/getAllNews', [NewsController::class, 'getAllNews'])->name('getAllNews');
  Route::get('/getAllParacticeAreas', [PracticeAreasController::class, 'getAllParacticeAreas'])->name('getAllParacticeAreas');
  Route::get('/getAllGeneralLinks', [GeneralLinkController::class, 'getAllGeneralLinks'])->name('getAllGeneralLinks');
  Route::get('/getAllOutReachs', [OutReachController::class, 'getAllOutReachs'])->name('getAllOutReachs');

  Route::get('/deleteAttorny/{attornyId}', [AttorneysController::class, 'deleteAttorny'])->name('delete.attorny');
  Route::get('/addAttornyView', [AttorneysController::class, 'addAttornyView'])->name('add.attorny.view');
  Route::post('/addNewAttorny', [AttorneysController::class, 'addNewAttorny'])->name('add.new.attorny');
  Route::get('/editAttornyView/{attornyId}', [AttorneysController::class, 'editAttornyView'])->name('edit.attorny.view');
  Route::post('/updateAttorny/{attornyId}', [AttorneysController::class, 'updateAttorny'])->name('update.attorny');

  Route::get('/deleteNews/{newsId}', [NewsController::class, 'deleteNews'])->name('delete.news');
  Route::get('/addNewsView', [NewsController::class, 'addNewsView'])->name('add.news.view');
  Route::post('/addNewNews', [NewsController::class, 'addNewNews'])->name('add.new.news');
  Route::get('/editNewsView/{newsId}', [NewsController::class, 'editNewsView'])->name('edit.news.view');
  Route::post('/updateNews/{newsId}', [NewsController::class, 'updateNews'])->name('update.news');

  Route::get('/deleteOutReach/{outReachId}', [OutReachController::class, 'deleteOutReach'])->name('delete.out.reach');
  Route::get('/addOutReachView', [OutReachController::class, 'addOutReachView'])->name('add.out.reach.view');
  Route::post('/addNewOutReach', [OutReachController::class, 'addNewOutReach'])->name('add.new.out.reach');
  Route::get('/editOutReachView/{outReachId}', [OutReachController::class, 'editOutReachView'])->name('edit.out.reach.view');
  Route::post('/updateOutReach/{outReachId}', [OutReachController::class, 'updateOutReach'])->name('update.out.reach');


  Route::get('/deleteBlog/{blogId}', [BlogController::class, 'deleteBlog'])->name('delete.blog');
  Route::get('/addBlogView', [BlogController::class, 'addBlogView'])->name('add.blog.view');
  Route::post('/addNewBlog', [BlogController::class, 'addNewBlog'])->name('add.new.blog');
  Route::get('/editBlogView/{blogId}', [BlogController::class, 'editBlogView'])->name('edit.blog.view');
  Route::post('/updateBlog/{blogId}', [BlogController::class, 'updateBlog'])->name('update.blog');

  Route::get('/deletePracticArea/{practiceAreaId}', [PracticeAreasController::class, 'deletePracticArea'])->name('delete.practice.area');
  Route::get('/addPracticAreaView', [PracticeAreasController::class, 'addPracticAreaView'])->name('add.practice.area.view');
  Route::post('/addNewPracticArea', [PracticeAreasController::class, 'addNewPracticArea'])->name('add.new.practice.area');
  Route::get('/editPracticAreaView/{practiceAreaId}', [PracticeAreasController::class, 'editPracticAreaView'])->name('edit.practice.area.view');
  Route::post('/updatePracticArea/{practiceAreaId}', [PracticeAreasController::class, 'updatePracticeArea'])->name('update.practice.area');

  Route::get('/deleteGeneralLink/{generalLinkId}', [GeneralLinkController::class, 'deleteGeneralLink'])->name('delete.general.link');
  Route::get('/addGeneralLinkView', [GeneralLinkController::class, 'addGeneralLinkView'])->name('add.general.link.view');
  Route::post('/addNewGeneralLink', [GeneralLinkController::class, 'addNewGeneralLink'])->name('add.new.general.link');
  Route::get('/editGeneralLinkView/{generalLinkId}', [GeneralLinkController::class, 'editGeneralLinkView'])->name('edit.general.link.view');
  Route::post('/updateGeneralLink/{generalLinkId}', [GeneralLinkController::class, 'updateGeneralLink'])->name('update.general.link');

  Route::post('addTestimonial', [TestimonialController::class, 'addTestimonial'])->name('add.testimonial');

  Route::get('addTestimonialView', [TestimonialController::class, 'addTestimonialView'])->name('addTestimonialView');

  Route::post('updateTestimonial/{testimonialId}', [TestimonialController::class, 'updateTestimonial'])->name('edit.testimonial');
  Route::get('deleteTestimonial/{testimonialId}', [TestimonialController::class, 'deleteTestimonial'])->name('delete.testimonial');
  Route::get('getAllTestimonial', [TestimonialController::class, 'getAllTestimonial'])->name('getAllTestimonial');
  Route::get('editTestimonialView/{testimonialId}', [TestimonialController::class, 'editTestimonialView'])->name('edit.testimonial.view');



  Route::get('addnew', [SeoBackendPageController::class, 'addBlogView'])->name('add.new');
  Route::get('get-all-pages', [SeoBackendPageController::class, 'getAllPages'])->name('get.all.pages');
  Route::post('create-page', [SeoBackendPageController::class, 'createBackedEndSeoPage'])->name('create.page');

  Route::get('edit/{id}',[SeoBackendPageController::class,'editPage'])->name('edit.page');
  Route::post('update-record/{id}',[SeoBackendPageController::class,'updateRecord'])->name('update.record');
  Route::get('delete-record/{id}',[SeoBackendPageController::class,'deleteRecord'])->name('delete.record');

  //
  Route::resource('hero-section', HeroSectionController::class);
  Route::get('hero-section-active/{id}', [HeroSectionController::class, 'activeHeroSection'])->name('active.hero.section');
  //
  Route::resource('opinions', OpinionsController::class);
  Route::resource('accomplisments', AccomplismentController::class);
  Route::resource('media-reel', MediaReelController::class);
  Route::resource('media', MediaController::class);



});

// SEO BACKEND PAGES
// Route::get('/criminal-law-in-anaheim', function () {
//   return view('front_end.seo-backend-pages.criminal-law-in-anaheim');
// });

// Route::get('/{blog-type}',[BlogController::class,'seoBackendPages'])->name('seo.backend.pages');

// Route::get('/{slug}', function(SeoBackendPage $slug){
//   return $slug->title;
// });
Route::get('/make-a-difference', function(){
  return view('front_end.seo-backend-pages.make-a-difference');
});
Route::get('/marcelis-morris-2',function(){
  return view('front_end.seo-backend-pages.marcelis-morris');
});
Route::get('/practice-areas/wages-hours-laws', function(){
  return view('front_end.seo-backend-pages.wages-hours-laws');
});
Route::get('practice-areas/whistle-blower-termination', function(){
  return view('front_end.seo-backend-pages.whistle-blower-termination');
});
Route::get('/{slug}', [SeoBackendPageController::class, 'getPageBySlug']);



// resource

