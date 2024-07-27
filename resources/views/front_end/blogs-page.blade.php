@extends('front_end.main-template')
@section('section')
@section('title','Blog - The Cochran Firm California')
      <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us pt90 s-pt-50">
        <div class="container-fluid" style="box-shadow: 0px 2px 2px rgb(0 0 0 / 5%)">
        <div class="container" >
            <div class="row">

              <div class="col-lg-9 single-blog-content-side">
                @foreach ($blogs as $blog)
                    <div class="row mb-4">
                      <div class="swiper-slide">
                        <div class="testimonial-wrap" style="color:#666666;">
                            <img src="{{ asset($blog->image) }}" class="card-img-top" alt="..." class="blog-page-blog-image">
                            <a href="{{ route('single.blog',$blog->slug) }}" style="color: rgb(0, 0, 0)"><h4 class="blog-page-blog-title">{{ $blog->title }}</h4></a>
                            <div class="d-flex mt-2" style="font-size:14px; font-family:Open Sans;">
                              <a href="{{ route('blogs') }}" ><p style="color: #666666">by {{ $blog->writen_by }}</p></a>
                              <p style="color:#666666;">| {{ date("F j, Y",strtotime($blog->created_at)) }}</p>
                              <a href="{{ route('blogs') }}" ><p style="color: #666666">| {{ $blog->blog_type }}</p></a>
                            </div>
                            <p style="font-size:14px; font-family:Open Sans;">{{ strlen($blog->short_description) > 500 ? substr($blog->short_description, 0, 2000) . '...' : $blog->short_description }}</p>
                        </div>
                      </div>
                    </div>
                @endforeach
                {{ $blogs->links() }}
              </div>

              <div class="col-lg-3 align-item-center">
                <form action="{{ url('searchBlog') }}", method="post">
                  @csrf
                <div style="margin-bottom: 30px; " class="input-group blog-page-sidebar-padding">
                  <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" name="search" aria-describedby="search-addon" style="border-top-right-radius: 0px !important;
    border-bottom-right-radius: 0px !important;"/>
                  <button type="submit" class="btn" data-mdb-ripple-init style="background-color:#ddd; color:666; border-radius:0px;">search</button>
                </div>
               </form>

                 <h5 class="blog-page-sidebar-padding">Recent Posts</h5>
                  @foreach ($blogs as $blog)
                    <p style="font-size:14px; font-family:Open Sans; color:#666" class="blog-page-sidebar-padding" ><a class="blog_titles" href="{{ route('single.blog',$blog->slug) }}">{{ $blog->title }}</a></p>
                  @endforeach
                  <p style="margin-left:20px; font-size:18px; font-family:Open Sans; color:#333333;margin-top: 10px" class="blog-page-sidebar-padding" >Recent Comments</p>
              </div>


            </div>
        </div>
        </div>
    </section>

@endsection
