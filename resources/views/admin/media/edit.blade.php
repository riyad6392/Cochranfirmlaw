@extends('admin.main-template')
@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <p class="mb-0">Edit Opinion</p>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="text-uppercase text-sm">Media Information</p>
                        <form action="{{route('media.update',$medias->id)}}" method="POST"
                              enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Title</label>
                                        <input name="title" class="form-control" type="text"
                                               value="{{ $medias->title }}" placeholder="title" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Video Link</label>
                                        <input name="video_link" class="form-control" type="text"
                                               value="{{ $medias->video_link }}" placeholder="Video Link" required>
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="textAreaExample">Short Description</label>
                                        <textarea name="short_description" class="form-control" id="editor2" rows="6"
                                                  placeholder="Short Description..."
                                                  required>{{ $medias->short_description}}</textarea>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="textAreaExample">Description</label>
                                        <textarea name="description" class="form-control" rows="6" id="editor"
                                                  placeholder="Description..."
                                                  required>{{ $medias->description}}</textarea>
                                    </div>
                                </div>


                                <div id="banner_image-preview-container" class="col-md-6">
                                    <img id="banner_image-preview" width="100px" height="100px"
                                         src="{{ Storage::url($medias->thumbal) }}" alt="Image Preview">
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Thumbal</label>
                                        <input name="thumbal" class="form-control" type="file" >
{{--                                        @if ($errors->has('image'))--}}
{{--                                            <span class="text-danger">{{ $errors->first('image') }}</span>--}}
{{--                                        @endif--}}
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button class="btn btn-primary btn-sm">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        @endsection

        @section('component-script')
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
                            $("#banner_image-preview").attr("src", "{{ Storage::url($medias->thumbal) }}");
                        }
                    });
                });
            </script>
            <script>
                const editor = Jodit.make('#editor');
                const editor2 = Jodit.make('#editor2');
            </script>
@endsection
