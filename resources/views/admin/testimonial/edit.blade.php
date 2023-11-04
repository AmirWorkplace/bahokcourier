@extends('layouts.admin.app')

@section('content')
<div class="row g-3">
    <div class="col-12">
        <form action="{{ Route('admin.testimonial.update', $data->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-header px-3 py-2">
                    <div class="d-flex justify-content-between align-items-center">
                        <h6 class="h6 mb-0 text-uppercase">Testimonial Thumbnail Edit</h6>
                        <a href="{{ Route('admin.testimonial.index') }}" class="btn btn-primary btn-sm text-uppercase">
                            Go Back
                        </a>
                    </div>
                </div>
                <div class="card-body p-4">
                    <div class="row g-3">
                        <div class="col-md-8 col-sm-6">
                            <label for="name" class="form-label require"><b>Name</b></label>
                            <input type="text" placeholder="name" class="form-control custom-input" id="title"
                                name="name" value="{{ $data->name }}">
                        </div> 
                        <div class="col-md-8 col-sm-6">
                            <label for="title" class="form-label require"><b>Title</b></label>
                            <input type="text" placeholder="Title" class="form-control custom-input" id="title"
                                name="title" value="{{ $data->title }}">
                        </div> 
                        <div class="col-12">
                            <label for="name" class="form-label require"><b>Thumbnail Image</b></label>
                            <input type="file" class="form-control custom-input" id="thumbnail" name="thumbnail">
                            <img src="{{ asset($data->thumbnail) }}" height="100" alt="{{ $data->title }}">
                        </div>
                        <div class="row g-3">
                            <label for="serial" class="form-label require"><b>Priority serial</b></label>
                            <input type="number" value="{{ $data->serial }}" class="form-control custom-input input-number" id="serial" name="serial">
                        </div> 
                        <div class="col-12">
                            <label for="short_description" class="form-label"><b>Description</b></label>
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