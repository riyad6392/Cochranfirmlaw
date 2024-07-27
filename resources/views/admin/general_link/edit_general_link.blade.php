@extends('admin.main-template')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-md-10 offset-md-1">
        <div class="card">
          <div class="card-header pb-0">
            <div class="d-flex align-items-center">
              <p class="mb-0">Edit General Link</p>
            </div>
          </div>
          <div class="card-body">
            <p class="text-uppercase text-sm">General Link Information</p>
            <form action="{{route('update.general.link',$generalLink->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Title</label>
                        <input name="title" class="form-control" type="text" value="{{ $generalLink->title }}" placeholder="title" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label">Title</label>
                          <input name="slug" class="form-control" type="text" value="{{$generalLink->slug}}" placeholder="slug" readonly>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label">Banner Image</label>
                          <input id="banner_image" name="banner_image" class="form-control" type="file">
                        </div>
                    </div>
                    <div id="banner_image-preview-container" class="col-md-6">
                        <img id="banner_image-preview" width="100px" height="100px" src="{{ asset($generalLink->banner_image) }}" alt="Image Preview">
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Content Image</label>
                        <input id="content_image" name="content_image" class="form-control" type="file">
                      </div>
                    </div>
                    <div id="content_image-preview-container" class="col-md-6">
                        <img id="content_image-preview" width="100px" height="100px" src="{{ asset($generalLink->content_image) }}" alt="Image Preview">
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                          <label class="form-label" for="textAreaExample">Description</label>
                          <textarea name="description" class="form-control" id="editor" rows="4" placeholder="Description..." required>{{$generalLink->description}}</textarea>
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
        $("#banner_image").change(function () {
            var input = this;
            var file = input.files[0];

            if (file) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $("#banner_image-preview").attr("src", e.target.result);
                };

                reader.readAsDataURL(file);
            } else {
                $("#banner_image-preview").attr("src", "{{ asset($generalLink->banner_image) }}");
            }
        });
    });
</script>
<script>
    $(document).ready(function () {
        $("#content_image").change(function () {
            var input = this;
            var file = input.files[0];

            if (file) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $("#content_image-preview").attr("src", e.target.result);
                };

                reader.readAsDataURL(file);
            } else {
                $("#content_image-preview").attr("src", "{{ asset($generalLink->content_image) }}");
            }
        });
    });
</script>
@endsection
