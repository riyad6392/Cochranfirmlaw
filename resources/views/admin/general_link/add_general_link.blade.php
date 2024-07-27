@extends('admin.main-template')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-md-10 offset-md-1">
        <div class="card">
          <div class="card-header pb-0">
            <div class="d-flex align-items-center">
              <p class="mb-0">Add General Link</p>
            </div>
          </div>
          <div class="card-body">
            <p class="text-uppercase text-sm">General Link Information</p>
            <form action="{{route('add.new.general.link')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Title</label>
                        <input name="title" class="form-control" type="text" value="" placeholder="Title" required>
                      </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label">Banner Image</label>
                          <input name="banner_image" class="form-control" type="file" required>
                          @if ($errors->has('banner_image'))
                          <span class="text-danger">{{ $errors->first('banner_image') }}</span>
                          @endif
                        </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Content Image</label>
                        <input name="content_image" class="form-control" type="file" required>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                          <label class="form-label" for="textAreaExample">Description</label>
                          <textarea name="description" class="form-control" id="editor" rows="4" placeholder="Description..." required></textarea>
                      </div>
                    </div>
                </div>
                <div class="text-center">
                    <button class="btn btn-primary btn-sm">Add New</button>
                </div>
            </form>

          </div>
        </div>
      </div>
    </div>
</div>
@endsection
