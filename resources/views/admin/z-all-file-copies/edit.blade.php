

@extends('layouts.admin.app')

@section('content')
<div class="row g-3">
    <div class="col-12">
        <form action="{{ Route('admin.work.update', $data->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-header px-3 py-2">
                    <div class="d-flex justify-content-between align-items-center">
                        <h6 class="h6 mb-0 text-uppercase">Work Edit</h6>
                        <a href="{{ Route('admin.work.index') }}" class="btn btn-primary btn-sm text-uppercase">Go
                            Back</a>
                    </div>
                </div>
                <div class="card-body p-4">
                    <div class="row g-3">
                        <div class="col-md-8 col-sm-6">
                            <label for="title" class="form-label require"><b>Work Title</b></label>
                            <input type="text" placeholder="Title" class="form-control custom-input" id="title"
                                name="title" value="{{ $data->title }}">
                        </div>
                        <input type="hidden" name="category_id" id="category_id" required value="{{ $data->category_id }}">
                        <input type="hidden" name="category_name" id="category_name" required value="{{ $data->category_name }}">
                        <div class="col-md-8 col-sm-6">
                            <label for="category" class="form-label require"><b>Work Category</b></label>
                            <select id="category" name="category" class="form-control custom-select">
                                <option hidden value="{{ $data->category_id }}|{{ $data->category_name }}">
                                    {{ $data->category_name }}
                                </option>
                                @foreach (App\Helper\helperClass::getWorkCategories(false) as $work_category)
                                <option value="{{ $work_category->id }}|{{ $work_category->name }}">
                                    {{ $work_category->name }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="name" class="form-label require"><b>Select Image</b></label>
                            <input type="file" class="form-control custom-input" id="image" name="image">
                            <img src="{{ asset($data->image) }}" height="100" alt="{{ $data->title }}">
                        </div>
                        <div class="col-12">
                            <label for="description" class="form-label"><b>Acclemation Description</b></label>
                            <textarea name="description" id="description" class="description" cols="30" rows="10"
                                placeholder="Write here your faqs Descriptions">{!! $data ? $data->description : '' !!}</textarea>
                        </div>
                        <div class="col-md-8 col-sm-6">
                            <label for="link" class="form-label require"><b>Work Link</b></label>
                            <input type="text" placeholder="Link" class="form-control custom-input" id="link"
                                name="link" value="{{ $data->link }}">
                        </div>
                    </div>
                </div>
                <div class="card-footer text-end px-3 py-2">
                    <button type="submit" class="btn btn-primary btn-sm">Update</button>
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