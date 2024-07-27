@extends('admin.main-template')
@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <p class="mb-0">Add New Page</p>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="text-uppercase text-sm">Page Information</p>
                        <form action="{{ route('create.page') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Heading one</label>
                                        <input name="head_one" class="form-control" type="text" value=""
                                            placeholder="Heading one" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Heading two</label>
                                        <input name="head_two" class="form-control" type="text" value=""
                                            placeholder="Heading two" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Title</label>
                                        <input name="title" class="form-control" type="text" value=""
                                            placeholder="Title" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Slug</label>
                                        <input name="slug" class="form-control" type="text" value=""
                                            placeholder="slug" required>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="textAreaExample">Description</label>
                                        <textarea name="description" class="form-control" id="editor" rows="4" placeholder="Description..." required></textarea>
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