@extends('admin.main-template')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-md-10 offset-md-1">
        <div class="card">
          <div class="card-header pb-0">
            <div class="d-flex align-items-center">
              <p class="mb-0">Edit Practice Area</p>
            </div>
          </div>
          <div class="card-body">
            <p class="text-uppercase text-sm">Practice Area Information</p>
            <form action="{{route('update.practice.area',$practiceArea->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Title</label>
                        <input name="title" class="form-control" type="text" value="{{ $practiceArea->title }}" placeholder="title" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label">Title</label>
                          <input name="slug" class="form-control" type="text" value="{{$practiceArea->slug}}" placeholder="slug" readonly>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label">Banner Image</label>
                          <input id="banner_image" name="banner_image" class="form-control" type="file">
                        </div>
                    </div>
                  
                    <div id="banner_image-preview-container" class="col-md-6">
                        <img id="banner_image-preview" width="100px" height="100px" src="{{ asset($practiceArea->banner_image) }}" alt="Image Preview">
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Content Image</label>
                        <input id="content_image" name="content_image" class="form-control" type="file">
                      </div>
                    </div>
                    <div id="content_image-preview-container" class="col-md-6">
                        <img id="content_image-preview" width="100px" height="100px" src="{{ asset($practiceArea->content_image) }}" alt="Image Preview">
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Practice Area Type</label>
                        <select class="form-select form-control" aria-label="Default select example" name="practice_area_type">
                          
                          <option value="civil_rigits" {{$practiceArea->practice_area_type == 'civil_rigits' ?  'selected' : ''}} >Civil Rigits</option>
                          <option value="personal_injuries" {{$practiceArea->practice_area_type == 'personal_injuries' ?  'selected' : ''}}>Personal Injuries</option>
                          <option value="employment" {{$practiceArea->practice_area_type == 'employment' ?  'selected' : ''}}>Employment</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                          <label class="form-label" for="textAreaExample">Short Description</label>
                          <textarea name="short_description" class="form-control" id="editor" rows="4" placeholder="short_description..." required>{{$practiceArea->short_description}}</textarea>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                          <label class="form-label" for="textAreaExample">Description</label>
                          <textarea name="description" class="form-control" id="editor" rows="4" placeholder="Description..." required>{{$practiceArea->description}}</textarea>
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
                $("#banner_image-preview").attr("src", "{{ asset($practiceArea->banner_image) }}");
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
                $("#content_image-preview").attr("src", "{{ asset($practiceArea->content_image) }}");
            }
        });
    });
</script>
<script>
  var editors = [].slice.call(document.querySelectorAll('#editor'));
  editors.forEach(function (textarea) {
  var editor = new Jodit(textarea, {
  "toolbarButtonSize": "small",
  "enter": "DIV",
  "buttons": "undo,redo,|,bold,strikethrough,underline,italic,,,,,,,,,,,,,,,,align,"
    });
});
</script>
@endsection
