<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href="{{route('home')}}" target="_blank">
      <img src="{{asset('assets/img/logo-ct-dark.png')}}" class="navbar-brand-img h-100" alt="main_logo">
      <span class="ms-1 font-weight-bold">Brian T. Dunn Site</span>
    </a>
  </div>
  <hr class="horizontal dark mt-0">
  <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link {{ (Request::route()->getName() == 'dashboard') ? 'active' : '' }}" href="{{route('dashboard')}}">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Dashboard</span>
        </a>
      </li>
{{--      <li class="nav-item">--}}
{{--          <a class="nav-link {{ (Request::route()->getName() == 'getAllAttornys') ? 'active' : '' }}" href="{{route('getAllAttornys')}}">--}}
{{--            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">--}}
{{--              <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>--}}
{{--            </div>--}}
{{--            <span class="nav-link-text ms-1">ATTORNEYS</span>--}}
{{--          </a>--}}
{{--      </li>--}}
{{--      <li class="nav-item">--}}
{{--          <a class="nav-link {{ (Request::route()->getName() == 'getAllBlogs') ? 'active' : '' }}" href="{{route('getAllBlogs')}}">--}}
{{--            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">--}}
{{--              <i class="ni ni-ruler-pencil text-warning text-sm opacity-10"></i>--}}

{{--            </div>--}}
{{--            <span class="nav-link-text ms-1">BLOGS</span>--}}
{{--          </a>--}}
{{--      </li>--}}
{{--      <li class="nav-item">--}}
{{--          <a class="nav-link {{ (Request::route()->getName() == 'getAllNews') ? 'active' : ''  }}" href="{{route('getAllNews')}}">--}}
{{--            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">--}}
{{--              <i class="ni ni-world-2 text-danger text-sm opacity-10"></i>--}}
{{--            </div>--}}
{{--            <span class="nav-link-text ms-1">NEWS</span>--}}
{{--          </a>--}}
{{--      </li>--}}
{{--      <li class="nav-item">--}}
{{--          <a class="nav-link {{ (Request::route()->getName() == 'getAllOutReachs') ? 'active' : ''  }}" href="{{route('getAllOutReachs')}}">--}}
{{--            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">--}}
{{--              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person-raised-hand" viewBox="0 0 12 12" style="color: #096f9f">--}}
{{--                  <path d="M6 6.207v9.043a.75.75 0 0 0 1.5 0V10.5a.5.5 0 0 1 1 0v4.75a.75.75 0 0 0 1.5 0v-8.5a.25.25 0 1 1 .5 0v2.5a.75.75 0 0 0 1.5 0V6.5a3 3 0 0 0-3-3H6.236a.998.998 0 0 1-.447-.106l-.33-.165A.83.83 0 0 1 5 2.488V.75a.75.75 0 0 0-1.5 0v2.083c0 .715.404 1.37 1.044 1.689L5.5 5c.32.32.5.754.5 1.207"/>--}}
{{--                  <path d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"/>--}}
{{--              </svg>--}}
{{--            </div>--}}
{{--            <span class="nav-link-text ms-1">Out Reachs</span>--}}
{{--          </a>--}}
{{--      </li>--}}
{{--      <li class="nav-item">--}}
{{--          <a class="nav-link {{ (Request::route()->getName() == 'getAllParacticeAreas') ? 'active' : '' }}" href="{{route('getAllParacticeAreas')}}">--}}
{{--            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">--}}
{{--              <i class="ni ni-collection text-info text-sm opacity-10"></i>--}}
{{--            </div>--}}
{{--            <span class="nav-link-text ms-1">PRACTICE AREAS</span>--}}
{{--          </a>--}}
{{--      </li>--}}
{{--      <li class="nav-item">--}}
{{--          <a class="nav-link {{ (Request::route()->getName() == 'getAllGeneralLinks') ? 'active' : '' }}" href="{{route('getAllGeneralLinks')}}">--}}
{{--            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">--}}
{{--              <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true" style="color: #323232;"></i>--}}
{{--            </div>--}}
{{--            <span class="nav-link-text ms-1">GENERAL LINKS</span>--}}
{{--          </a>--}}
{{--      </li>--}}

        <li class="nav-item">
            <a class="nav-link {{ (Request::route()->getName() == 'hero-section.index') ? 'active' : '' }}" href="{{route('hero-section.index')}}">
                <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true" style="color: #323232;"></i>
                </div>
                <span class="nav-link-text ms-1">HERO SECTION</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ (Request::route()->getName() == 'opinions.edit') ? 'active' : '' }}" href="{{route('opinions.edit',$id=1)}}">
                <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true" style="color: #323232;"></i>
                </div>
                <span class="nav-link-text ms-1">OPINIONS</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ (Request::route()->getName() == 'accomplisments.edit') ? 'active' : '' }}" href="{{route('accomplisments.edit',$id=1)}}">
                <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true" style="color: #323232;"></i>
                </div>
                <span class="nav-link-text ms-1">Accomplishment</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ (Request::route()->getName() == 'media-reel.index') ? 'active' : '' }}" href="{{route('media-reel.index')}}">
                <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true" style="color: #323232;"></i>
                </div>
                <span class="nav-link-text ms-1">Media Reel</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ (Request::route()->getName() == 'media.index') ? 'active' : '' }}" href="{{route('media.index')}}">
                <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true" style="color: #323232;"></i>
                </div>
                <span class="nav-link-text ms-1">Media</span>
            </a>
        </li>


{{--      <li class="nav-item">--}}
{{--        <a class="nav-link {{ (Request::route()->getName() == 'getAllTestimonial') ? 'active' : '' }}" href="{{route('getAllTestimonial')}}">--}}
{{--          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-quote" viewBox="0 0 16 16">--}}
{{--            <path d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 9 7.558V11a1 1 0 0 0 1 1zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 3 7.558V11a1 1 0 0 0 1 1z"/>--}}
{{--          </svg>--}}
{{--          <span class="nav-link-text ms-1">Testimonials</span>--}}
{{--        </a>--}}
{{--    </li>--}}
{{--    <li class="nav-item">--}}
{{--      <a class="nav-link {{ (Request::route()->getName() == 'get.all.pages') ? 'active' : '' }}" href="{{route('get.all.pages')}}">--}}
{{--        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-quote" viewBox="0 0 16 16">--}}
{{--          <path d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 9 7.558V11a1 1 0 0 0 1 1zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 3 7.558V11a1 1 0 0 0 1 1z"/>--}}
{{--        </svg>--}}
{{--        <span class="nav-link-text ms-1">Backend Pages</span>--}}
{{--      </a>--}}
{{--  </li>--}}
    </ul>
  </div>
</aside>
