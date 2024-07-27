@extends('admin.main-template')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-md-10 offset-md-1">
        <div class="card">
          <div class="card-header pb-0">
            <div class="d-flex align-items-center">
              <p class="mb-0">Edit Out Reach</p>
            </div>
          </div>
          <div class="card-body">
            <p class="text-uppercase text-sm">Out Reach Information</p>
            <form action="{{route('update.out.reach',$outReach->id)}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Title</label>
                      <input name="title" class="form-control" type="text" value="{{$outReach->title}}" placeholder="Title" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Posted By</label>
                      <input name="posted_by" class="form-control" type="text" value="{{ $outReach->posted_by }}" placeholder="Posted By" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Site URL</label>
                        <input name="redirect_site_url" class="form-control" type="text" value="{{ $outReach->redirect_site_url }}" placeholder="redirect site url" required>
                      </div>
                  </div>


                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Image</label>
                      <input name="image" id="newsImage" class="form-control" type="file">
                    </div>
                  </div>
                  <div id="news-preview-container" class="col-md-6">
                      <img id="news-preview" width="100px" height="100px" src="{{ asset($outReach->image) }}" alt="Image Preview">
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label" for="textAreaExample">Short Description</label>
                        <textarea name="short_description" class="form-control" rows="4" placeholder="Short Description..." required>{{$outReach->short_description}}</textarea>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label" for="editor">Description</label>
                        <textarea name="description" class="form-control" id="editor" rows="4" placeholder="Description..." required>{{$outReach->description}}</textarea>
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
                $("#banner_image-preview").attr("src", "{{ asset($outReach->banner_image) }}");
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
                $("#content_image-preview").attr("src", "{{ asset($outReach->content_image) }}");
            }
        });
    });
</script>
@endsection
