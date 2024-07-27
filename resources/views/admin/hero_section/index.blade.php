@extends('admin.main-template')
@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0 d-flex" style="justify-content: space-between;">
                        <h6>Hero Section</h6>
                        <a class="btn btn-sm btn-primary" href="{{route('hero-section.create')}}">Add New</a>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        @if(Session::has('delete'))
                            <script>
                                document.addEventListener('DOMContentLoaded', function () {
                                    toastr.error('{{ Session::get('delete') }}');
                                });
                            </script>
                        @endif
                        @if(Session::has('msg'))
                            <div class="mx-4 col-md-6 alert alert-success" role="alert">{{Session::get('msg')}}</div>
                        @endif
                        @if(session('success'))
                            <script>
                                document.addEventListener('DOMContentLoaded', function () {
                                    toastr.success('{{ session('success') }}');
                                });
                            </script>
                        @endif

                        @if(session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Title
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Sub
                                        Title
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Image
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Learn More Link
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Contact Us Link
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Created By
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Updated By
                                    </th>

                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Active Status
                                    </th>

                                    <th class="text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($heroSections as $heroSection)
                                    <tr>
                                        <td>{{ Str::limit($heroSection->title, 20) }}</td>
                                        <td>{{ Str::limit($heroSection->sub_title, 20) }}</td>
                                        <td>
                                            <img src="{{ Storage::url($heroSection->image) }}" class="rounded-circle"
                                                 width="50" height="50"/>
                                        </td>
                                        <td>{{ Str::limit($heroSection->learn_more_link, 20) }}</td>
                                        <td>{{ Str::limit($heroSection->contact_us_link, 20) }}</td>
                                        <td>{{ $heroSection->user ? Str::limit($heroSection->user->name, 20) : 'N/A' }}</td>
                                        <td>{{ $heroSection->user ? Str::limit($heroSection->user->name, 20) : 'N/A' }}</td>

                                        <td>

                                            <input type="checkbox" onchange="handelStatusChange({{$heroSection->id}})"
                                                   {{$heroSection->is_active == 1 ? 'checked' : ''}} data-toggle="toggle">
                                        </td>


                                        <td class="align-middle">
                                            <div class="d-flex">
                                                <!-- Edit Button -->
                                                <a href="{{ route('hero-section.edit', $heroSection->id) }}"
                                                   class="text-secondary font-weight-bold text-xs mt-2"
                                                   data-toggle="tooltip" data-original-title="Edit user">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                         fill="currentColor" class="bi bi-pencil-fill"
                                                         viewBox="0 0 16 16" style="color:#250fcf">
                                                        <path
                                                            d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                                                    </svg>
                                                </a>

                                                <!-- Delete Button -->
                                                <form action="{{ route('hero-section.destroy', $heroSection->id) }}"
                                                      method="POST" style="display: inline-block;"
                                                      class="text-secondary font-weight-bold text-xs"
                                                      data-toggle="tooltip" data-original-title="Edit user">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit"
                                                            class="btn btn-link text-secondary font-weight-bold text-xs"
                                                            data-toggle="tooltip"
                                                            data-original-title="Delete hero section"
                                                            onclick="return confirm('Are you sure you want to delete this hero section?');">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                             fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16"
                                                             style="color:#d70707">
                                                            <path
                                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                                            <path
                                                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                                                        </svg>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-center">
                                {{ $heroSections->links() }}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('component-script')
    <script>

        function handelStatusChange(id) {
            console.log(id)
            axios.get('hero-section-active/'+ id).then((response) =>{
                console.log(response)
                location.reload();
            })
        }

    </script>
@endsection


