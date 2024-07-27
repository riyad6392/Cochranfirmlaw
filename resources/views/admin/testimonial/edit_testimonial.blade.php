@extends('admin.main-template')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-md-10 offset-md-1">
        <div class="card">
          <div class="card-header pb-0">
            <div class="d-flex align-items-center">
              <p class="mb-0">Edit Testimonial</p>
            </div>
          </div>
          <div class="card-body">
            <p class="text-uppercase text-sm">Testimonial Information</p>
            <form action="{{route('edit.testimonial',$testimonial->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">title</label>
                        <input name="title" class="form-control" type="text" value="{{$testimonial->name}}" placeholder="Optional">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                          <label class="form-label" for="textAreaExample">Description</label>
                          <textarea name="description" class="form-control" id="textAreaExample1" rows="6" placeholder="description..." required>{{$testimonial->description ?? " "}}</textarea>
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




@endsection
