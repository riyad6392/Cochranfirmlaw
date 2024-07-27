<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use DOMDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\ImageManagerStatic;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    function getAllBlogs() {
        $blogs = Blog::orderBy('id','DESC')->paginate(15);
        return view('admin.blog.index')->with('blogs',$blogs);
    }

    function  addBlogView(){
        return view('admin.blog.add_blog');
     }

     function addNewBlog(Request $request) {
               
        if ($request->hasFile('image')) {
            $imageName = $request->file('image')->hashName();
            $originalImage = $request->file('image');
            $webpImagePath = 'storage/blogs/' . pathinfo($imageName, PATHINFO_FILENAME) . '.webp';

            $img = ImageManagerStatic::make($originalImage);
            $encoded = $img->encode('webp', 80);
            // $encoded->save(public_path($webpImagePath),80,'webp');
            $encoded->save(($webpImagePath),80,'webp');
        }
        $dom = new DOMDocument();
        $dom->loadHTML( $request->description);
        $textContent = $dom->textContent;
        $limitedText = substr($textContent, 0, 400); 

        Blog::create([
            'title' => $request->title,
            'writen_by' => $request->writen_by,
            'image' => $webpImagePath,
            'blog_type' => $request->blog_type,
            'short_description' => $limitedText,
            'description' => $request->description,
            'slug' => Str::slug($request->title),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        return Redirect::route('getAllBlogs')->with('msg','Record Added');
     }

     function  editBlogView($blogId){
        $blog = Blog::find($blogId);
        return view('admin.blog.edit_blog')->with('blog',$blog);
      }

      function updateBlog(Request $request,$blogId) {
           
            $blog = Blog::find($blogId);
            if ($request->hasFile('image')) {
                $imageName = $request->file('image')->hashName();
                $originalImage = $request->file('image');
                $webpImagePath = 'storage/blogs/' . pathinfo($imageName, PATHINFO_FILENAME) . '.webp';

                $img = ImageManagerStatic::make($originalImage);
                $encoded = $img->encode('webp', 80);
                // $encoded->save(public_path($webpImagePath),80,'webp');
                $encoded->save(($webpImagePath),80,'webp');
            }
    
             $dom = new DOMDocument();
             $dom->loadHTML( $request->description);
             $textContent = $dom->textContent;
             $limitedText = substr($textContent, 0, 400);
           
            $blog->update([
                'title' => $request->title,
                'writen_by' => $request->writen_by,
                'image' => $webpImagePath ?? $blog->image,
                'blog_type' => $request->blog_type,
                'short_description' => $limitedText,
                'description' => $request->description,
                'slug' => Str::slug($request->slug),
            ]);
            return Redirect::route('getAllBlogs')->with('msg','Record updated');
      }

      function deleteBlog($blogId) {
         $blog = Blog::find($blogId);
         $blog->delete();
         return Redirect::back()->with('delete','Record Deleted');
      }
}
