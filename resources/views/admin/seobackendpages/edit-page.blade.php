@extends('admin.main-template')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-md-10 offset-md-1">
        <div class="card">
          <div class="card-header pb-0">
            <div class="d-flex align-items-center">
              <p class="mb-0">Edit Page</p>
            </div>
          </div>
          <div class="card-body">
            <p class="text-uppercase text-sm">Page Information</p>
            <form action="{{route('update.record',$data->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Head one</label>
                        <input name="head_one" class="form-control" type="text" value="{{$data->head_one}}" placeholder="Head One" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Head two</label>
                        <input name="head_two" class="form-control" type="text" value="{{$data->head_two}}" placeholder="Head Two" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label">Title</label>
                          <input name="title" class="form-control" type="text" value="{{ $data->title }}" placeholder="Title" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label">slug</label>
                          <input name="slug" class="form-control" type="text" value="{{ $data->slug }}" placeholder="Slug" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                          <label class="form-label" for="textAreaExample">Description</label>
                          <textarea name="description" class="form-control" id="editor" rows="6" placeholder="Description" required>{{$data->description ?? " "}}</textarea>
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

{{-- <script>
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
</script> --}}


@endsection
