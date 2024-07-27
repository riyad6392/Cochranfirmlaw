@extends('admin.main-template')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-md-10 offset-md-1">
        <div class="card">
          <div class="card-header pb-0">
            <div class="d-flex align-items-center">
              <p class="mb-0">Add Attorney</p>
            </div>
          </div>
          <div class="card-body">
            <p class="text-uppercase text-sm">Attorney Information</p>
            <form action="{{route('add.new.attorny')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Name</label>
                        <input name="name" class="form-control" type="text" value="" placeholder="Lucky Jesse" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Role</label>
                        <input name="role" class="form-control" type="text" value="" placeholder="Manager" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label">About Head 1</label>
                          <input name="about_head_one" class="form-control" type="text" value="" placeholder="Real attorneys" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label">About Head 2</label>
                          <input name="about_head_two" class="form-control" type="text" value="" placeholder="Change the world" required>
                        </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Avatar</label>
                        <input name="avatar" class="form-control" type="file" required>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Display Image</label>
                        <input name="display_img" class="form-control" type="file" required>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                          <label class="form-label" for="textAreaExample">Bio</label>
                          <textarea name="bio" class="form-control" id="editor" rows="4" placeholder="bio..." id="editor" required></textarea>
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
