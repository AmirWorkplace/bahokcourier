

@extends('layouts.admin.app')

@section('content')
<div class="row g-3">
    <div class="col-12">
        <form action="{{ Route('admin.showcase-item.update', $data->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-header px-3 py-2">
                    <div class="d-flex justify-content-between align-items-center">
                        <h6 class="h6 mb-0 text-uppercase">Showcase Items Edit</h6>
                        <a href="{{ Route('admin.showcase-item.index') }}" class="btn btn-primary btn-sm text-uppercase">Go
                            Back</a>
                    </div>
                </div>
                <div class="card-body p-4">
                    <div class="row g-3">
                        <div class="col-md-8 col-sm-6">
                            <label for="title" class="form-label require"><b>Showcase Items Title</b></label>
                            <input type="text" placeholder="Title" class="form-control custom-input" id="title"
                                name="title" value="{{ $data->title }}">
                        </div>
                        <div class="col-md-8 col-sm-6">
                            <label for="serial" class="form-label require"><b>Showcase Items Serial</b></label>
                            <input type="text" placeholder="Serial" class="form-control custom-input" id="serial"
                                name="serial" value="{{ $data->serial }}">
                        </div>
                        <div class="col-12">
                            <label for="name" class="form-label require"><b>Select Image</b></label>
                            <input type="file" class="form-control custom-input" id="thumbnail" name="thumbnail">
                            <img src="{{ asset($data->thumbnail) }}" height="100" alt="{{ $data->title }}">
                        </div>
                        <div class="col-12">
                            <label for="short_description" class="form-label"><b>Showcase Items Description</b></label>
                            <textarea name="short_description" id="short_description" class="short_description" cols="30" rows="10"
                                placeholder="Write here your faqs Descriptions">{!! $data ? $data->short_description : '' !!}</textarea>
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