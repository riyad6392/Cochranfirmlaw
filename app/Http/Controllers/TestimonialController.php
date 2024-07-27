<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function getAllTestimonial(){
        $all_testimonial = Testimonial::orderBy('id','DESC')->paginate(10);
        return view('admin.testimonial.index')->with('testimonials',$all_testimonial);
    }
    public function addTestimonialView(){
        return view('admin.testimonial.add_testimonial');
    }
    // Add Testimonial
    public function addTestimonial(Request $request){
        Testimonial::create([
            'title' => $request->title,
            'description' => $request->description
        ]);

        return redirect()->route('getAllTestimonial')->with('msg','Recorded added');
    }

    public function editTestimonialView($testimonialId){
        $testimonial = Testimonial::find($testimonialId);
        return view('admin.testimonial.edit_testimonial')->with('testimonial',$testimonial);
    }
    // Update Testimonial
    public function updateTestimonial(Request $request, $testimonialId){
        $update_testimonial = Testimonial::find($testimonialId);
        $update_testimonial->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);
        return redirect()->route('getAllTestimonial')->with('msg','Record updated');
        
    }

    // Delete Testimonial
    public function deleteTestimonial($testimonialId){
        $testimonial = Testimonial::find($testimonialId);
        $testimonial->delete();
        return redirect()->route('getAllTestimonial')->with('delete','Record Deleted');
    }
}
