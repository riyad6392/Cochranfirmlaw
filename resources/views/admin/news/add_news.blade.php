@extends('admin.main-template')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-md-10 offset-md-1">
        <div class="card">
          <div class="card-header pb-0">
            <div class="d-flex align-items-center">
              <p class="mb-0">Add News</p>
            </div>
          </div>
          <div class="card-body">
            <p class="text-uppercase text-sm">News Information</p>
            <form action="{{route('add.new.news')}}" method="POST" enctype="multipart/form-data">
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
                        <label for="example-text-input" class="form-control-label">Posted By</label>
                        <input name="posted_by" class="form-control" type="text" value="" placeholder="Posted By" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label">Site URL</label>
                          <input name="redirect_site_url" class="form-control" type="text" value="" placeholder="redirect site url" required>
                        </div>
                    </div>


                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Image</label>
                        <input name="image" class="form-control" type="file" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Select Options</label>
                        <input name="select_option" class="form-control" type="text" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Sub Title</label>
                        <input name="sub_title" class="form-control" type="text" required>
                      </div>
                    </div>
                    
                    <div class="col-md-12">
                      <div class="form-group">
                          <label class="form-label" for="textAreaExample">Short Description</label>
                          <textarea name="short_description" class="form-control" id="textAreaExample" rows="4" placeholder="Short Description..." required></textarea>
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
