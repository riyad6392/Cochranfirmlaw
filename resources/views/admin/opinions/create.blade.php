@extends('admin.main-template')
@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <p class="mb-0">Add Opinions</p>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="text-uppercase text-sm">Opinions Information</p>
                        <form action="{{route('opinions.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Title</label>
                                        <input name="title" class="form-control" type="text" value="" placeholder="Title" required>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="textAreaExample">Short Description</label>
                                        <textarea name="short_description" class="form-control" id="editor" rows="6" placeholder=" Short Description..." required></textarea>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="textAreaExample">Description</label>
                                        <textarea name="description" class="form-control" id="editor2" rows="6" placeholder="Description..." required></textarea>
                                    </div>
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

@section('component-script')
    <script>
        const editor = Jodit.make('#editor');
        const editor2 = Jodit.make('#editor2');
    </script>
@endsection
