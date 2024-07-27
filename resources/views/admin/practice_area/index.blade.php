@extends('admin.main-template')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0 d-flex" style="justify-content: space-between;">
            <h6>Practice Areas</h6>
            <a class="btn btn-sm btn-primary" href="{{route('add.practice.area.view')}}">Add New</a>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            @if(Session::has('delete'))
                <div class="mx-4 col-md-6 alert alert-danger" role="alert">{{Session::get('delete')}}</div>
            @endif
            @if(Session::has('msg'))
                <div class="mx-4 col-md-6 alert alert-success" role="alert">{{Session::get('msg')}}</div>
            @endif
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Practice Areas</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Banner Image</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Description</th>
                    <th class="text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($practiceAreas as $practiceArea)
                    <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div>
                              <img src="{{ asset($practiceArea->content_image) }}" class="avatar avatar-sm me-3" alt="user1">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">{{strlen($practiceArea->title) > 35 ? substr($practiceArea->title, 0, 35) . '...' : $practiceArea->title}}</h6>
                              <p class="text-xs text-secondary mb-0">{{$practiceArea->slug}}</p>
                            </div>
                          </div>
                        </td>
                        <td>
                            <img src="{{ asset($practiceArea->banner_image) }}" class="avatar avatar-sm me-3" alt="user1">
                          {{-- <a href="{{$singleNews->redirect_site_url}}">{{strlen($singleNews->redirect_site_url) > 35 ? substr($singleNews->redirect_site_url, 0, 35) . '...' : $singleNews->redirect_site_url}}</a> --}}
                        </td>
                        <td class="align-middle text-center text-sm">
                            <p class="text-xs text-secondary mb-0">{{strlen($practiceArea->description) > 50 ? substr($practiceArea->description, 0, 50) . '...' : $practiceArea->description}}</p>
                        </td>
                        <td class="align-middle">
                          <a href="{{route('edit.practice.area.view',$practiceArea->id)}}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16" style="color:#250fcf">
                                <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                              </svg>
                          </a>
                          <a href="{{route('delete.practice.area',$practiceArea->id)}}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16" style="color:#d70707">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                            </svg>
                          </a>
                        </td>
                      </tr>
                    @endforeach
                </tbody>
              </table>
              <div class="d-flex justify-content-center">
                {{ $practiceAreas->links() }}
               </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
@endsection
