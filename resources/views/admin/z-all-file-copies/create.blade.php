
@extends('layouts.admin.app')

@section('content')
<div class="row g-3">
    <div class="col-12">
        <form action="{{ Route('admin.details-card.store') }}" method="POST" enctype="multipart/form-data" id="details-card-form">
            @csrf
            <div class="card">
                <div class="card-header px-3 py-2">
                    <div class="d-flex justify-content-between align-items-center">
                        <h6 class="h6 mb-0 text-uppercase">Add Details Card</h6>
                        <a href="{{ Route('admin.details-card.index') }}" class="btn btn-primary btn-sm text-uppercase">
                            Go Back
                        </a>
                    </div>
                </div>
                <div class="card-body p-4">
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="title" class="form-label require"><b>Details Card Title</b></label>
                            <input type="text" placeholder="Title" class="form-control custom-input" id="title"
                                name="title">
                        </div>  
                        <div class="col-12">
                            <label for="serial" class="form-label require"><b>Special Food Item serial</b></label>
                            <input type="number" value="1" class="form-control custom-input input-number" id="serial" name="serial">
                        </div> 
                        <div class="col-12">
                            <label for="description" class="form-label"><b>Details Card Description</b></label>
                            <textarea name="description" id="description" required class="short_description" cols="30"
                                rows="10" placeholder="Write here your Descriptions"></textarea>
                        </div>
                    </div>
                </div>

                <div class="card-footer text-end px-3 py-2">
                    <button type="submit" class="btn btn-primary btn-sm">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>


@extends('layouts.admin.app')

@section('content')
<div class="row g-3">
    <div class="col-12">
        <form action="{{ Route('admin.work.store') }}" method="POST" enctype="multipart/form-data" id="work-form">
            @csrf
            <div class="card">
                <div class="card-header px-3 py-2">
                    <div class="d-flex justify-content-between align-items-center">
                        <h6 class="h6 mb-0 text-uppercase">Add work</h6>
                        <a href="{{ Route('admin.work.index') }}" class="btn btn-primary btn-sm text-uppercase">
                            Go Back
                        </a>
                    </div>
                </div>
                <div class="card-body p-4">
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="title" class="form-label require"><b>Work Title</b></label>
                            <input type="text" placeholder="Title" class="form-control custom-input" id="title"
                                name="title">
                        </div>
                        <input type="hidden" name="category_id" id="category_id" required>
                        <input type="hidden" name="category_name" id="category_name" required>
                        <div class="col-12">
                            <label for="category" class="form-label require"><b>Work Category</b></label>
                            <select id="category" name="category" required class="form-control custom-select">
                                <option hidden selected>Select One</option>

                                @foreach (App\Helper\helperClass::getWorkCategories(false) as $work_category)
                                <option value="{{ $work_category->id }}|{{ $work_category->name }}">
                                    {{ $work_category->name }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="image" class="form-label require"><b>Select Image</b></label>
                            <input type="file" class="form-control custom-input" id="image" name="image" required>
                        </div>
                        <div class="col-12">
                            <label for="description" class="form-label"><b>Work Description</b></label>
                            <textarea name="description" id="description" required class="description" cols="30"
                                rows="10" placeholder="Write here your Descriptions"></textarea>
                        </div>
                        <div class="col-md-8 col-sm-6">
                            <label for="link" class="form-label require"><b>Work Link</b></label>
                            <input type="text" placeholder="Link" class="form-control custom-input" id="link"
                                name="link">
                        </div>
                    </div>
                </div>

                <div class="card-footer text-end px-3 py-2">
                    <button type="submit" class="btn btn-primary btn-sm">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@push('js')
    <script>
        $(document).ready(function(){
            $('#category').change(function(){
                var category = $('#category').val().split("|");
                $("#category_id").val(category[0]);
                $("#category_name").val(category[1]);
            });
        });
    </script>
@endpush
@endsection