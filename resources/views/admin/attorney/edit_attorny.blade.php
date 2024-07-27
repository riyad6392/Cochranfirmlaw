@extends('admin.main-template')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-md-10 offset-md-1">
        <div class="card">
          <div class="card-header pb-0">
            <div class="d-flex align-items-center">
              <p class="mb-0">Edit Attorney</p>
            </div>
          </div>
          <div class="card-body">
            <p class="text-uppercase text-sm">Attorney Information</p>
            <form action="{{route('update.attorny',$attorny->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Name</label>
                        <input name="name" class="form-control" type="text" value="{{$attorny->name}}" placeholder="Lucky Jesse" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Role</label>
                        <input name="role" class="form-control" type="text" value="{{$attorny->role}}" placeholder="Manager" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label">About Head 1</label>
                          <input name="about_head_one" class="form-control" type="text" value="{{ $attorny->about_head_one }}" placeholder="Real attorneys" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label">About Head 2</label>
                          <input name="about_head_two" class="form-control" type="text" value="{{ $attorny->about_head_two }}" placeholder="Change the world" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Avatar</label>
                        <input id="avatar" name="avatar" class="form-control" type="file"  value="{{$attorny->avatar}}">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Display Image</label>
                        <input id="display_img" name="display_img" class="form-control" type="file"  value="{{$attorny->display_img}}">
                      </div>
                    </div>
                    <div id="image-preview-container" class="col-md-6">
                        <img id="image-preview" width="100px" height="100px" src="{{ asset($attorny->avatar) }}" alt="Image Preview">
                    </div>
                    <div id="image-preview-container" class="col-md-6">
                      <img id="image-preview" width="100px" height="100px" src="{{ asset($attorny->display_img) }}" alt="Image Preview">
                  </div>
                    <div class="col-md-12">
                      <div class="form-group">
                          <label class="form-label" for="textAreaExample">Bio</label>
                          <textarea name="bio" class="form-control" id="editor" rows="6" placeholder="bio..." required>{{$attorny->bio ?? " "}}</textarea>
                      </div>
                    </div>
                </div>
                <div class="text-center">
                    <button class="btn btn-primary btn-sm">Save</button>
                </div>
            </form>

          </div>
        </div>
      </div>
    </div>
</div>

<script>
    $(document).ready(function () {

        $("#avatar").change(function () {
            var input = this;
            var file = input.files[0];

            if (file) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $("#image-preview").attr("src", e.target.result);
                };

                reader.readAsDataURL(file);
            } else {
                $("#image-preview").attr("src", "{{ asset($attorny->avatar) }}");
            }
        });
    });
</script>


@endsection
