@extends('admin.main-template')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-md-10 offset-md-1">
        <div class="card">
          <div class="card-header pb-0">
            <div class="d-flex align-items-center">
              <p class="mb-0">Edit Blog</p>
            </div>
          </div>
          <div class="card-body">
            <p class="text-uppercase text-sm">Blog Information</p>
            <form action="{{route('update.blog',$blog->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Title</label>
                        <input name="title" class="form-control" type="text" value="{{ $blog->title }}" placeholder="Title" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Written By</label>
                        <input name="writen_by" class="form-control" type="text" value="{{ $blog->writen_by }}" placeholder="Author" required>
                      </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label">Blog Type</label>
                          <input name="blog_type" class="form-control" type="text" value="{{ $blog->blog_type }}" placeholder="Blog type" required>
                        </div>
                    </div>


                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Image</label>
                        <input name="image" id="image" class="form-control" type="file" >
                      </div>
                    </div>
                    <div id="blog-preview-container" class="col-md-6">
                        <img id="blog-preview" width="100px" height="100px" src="{{ asset($blog->image) }}" alt="Image Preview">
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                          <label class="form-label" for="textAreaExample">Description</label>
                          <textarea name="description" class="form-control" id="editor" rows="6" placeholder="Description..." required>{{ $blog->description}}</textarea>
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

        $("#image").change(function () {
            var input = this;
            var file = input.files[0];

            if (file) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $("#blog-preview").attr("src", e.target.result);
                };

                reader.readAsDataURL(file);
            } else {
                $("#blog-preview").attr("src", "{{ asset($blog->avatar) }}");
            }
        });
    });
</script>
@endsection
