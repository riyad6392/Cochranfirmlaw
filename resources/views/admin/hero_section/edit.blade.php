@extends('admin.main-template')
@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <p class="mb-0">Edit Hero Section</p>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="text-uppercase text-sm">Hero Section Information</p>
                        <form action="{{route('hero-section.update',$heroSection->id)}}" method="POST"
                              enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Title</label>
                                        <input name="title" class="form-control" type="text"
                                               value="{{ $heroSection->title }}" placeholder="title" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Sub Title</label>
                                        <input name="sub_title" class="form-control" type="text"
                                               value="{{ $heroSection->sub_title }}" placeholder="Sub Title" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Learn More
                                            Link</label>
                                        <input name="learn_more_link" class="form-control" type="text"
                                               value="{{ $heroSection->learn_more_link }}" placeholder="learn_more_link"
                                               required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Contact Us
                                            Link</label>
                                        <input name="contact_us_link" class="form-control" type="text"
                                               value="{{ $heroSection->contact_us_link }}" placeholder="contact_us_link"
                                               required>
                                    </div>
                                </div>

                                <div id="banner_image-preview-container" class="col-md-6">
                                    <img id="banner_image-preview" width="100px" height="100px"
                                         src="{{ Storage::url($heroSection->image) }}" alt="Image Preview">
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Image</label>
                                        <input name="image" class="form-control" type="file" required>
                                        @if ($errors->has('image'))
                                            <span class="text-danger">{{ $errors->first('image') }}</span>
                                        @endif
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
                    $("#banner_image-preview").attr("src", "{{ Storage::url($heroSection->image) }}");
                }
            });
        });
    </script>

@endsection
