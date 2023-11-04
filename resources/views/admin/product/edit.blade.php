@extends('layouts.admin.app')

@section('content')
<div class="row g-3">
    <div class="col-12">
        <form action="{{ Route('admin.product.update', $data->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-header px-3 py-2">
                    <div class="d-flex justify-content-between align-items-center">
                        <h6 class="h6 mb-0 text-uppercase">Edit Product</h6>
                        <a href="{{ Route('admin.product.index') }}" class="btn btn-primary btn-sm text-uppercase">
                            Go Back
                        </a>
                    </div>
                </div>
                <div class="card-body p-4">
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="name" class="form-label require"><b>Product Name</b></label>
                            <input type="text" placeholder="Product Name" class="form-control custom-input" id="name"
                                name="name" required value="{{ $data->name }}">
                        </div>
                        <div class="col-12">
                            <label for="title" class="form-label require"><b>Product Title</b></label>
                            <input type="text" placeholder="Product Title" class="form-control custom-input" id="title"
                                name="title" required value="{{ $data->title }}">
                        </div>
                        <div class="col-12">
                            <label for="images" class="form-label require"><b>Product Images</b></label>
                            <input type="file" class="form-control custom-input" id="images" name="images[]" multiple>

                                @php 
                                    $images = json_decode($data->images);
                                @endphp

                                @isset($images)
                                    <div class="gap-3" style="padding: 6px; display: grid; grid-template-columns: repeat(3, 1fr);" >
                                        @foreach ($images as $image)
                                            <img src="{{ asset($image) }}" class="border" height="100" alt="{{ $data->title }}">
                                        @endforeach
                                    </div>
                                @endisset
                        </div>
                        <div class="col-12">
                            <label for="video" class="form-label require"><b>Product Video's Youtube Embed Url </b></label>
                            <input type="text" placeholder="https://www." class="form-control custom-input" id="video"
                                name="video" value="{{ $data->video }}">
                        </div>
                        <div class="col-12">
                            <label for="tags" class="form-label require"><b>Product Tags</b></label>
                            <input type="text" placeholder="Web Design, Web Development, Database Management" class="form-control custom-input" id="tags"
                                name="tags" required value="{{ $data->tags }}">
                        </div>
                        <div class="col-12">
                            <label for="creator" class="form-label require"><b>Product's Creator</b></label>
                            <input type="text" placeholder="Creator Name" class="form-control custom-input" id="creator"
                                name="creator" value="{{ $data->creator }}">
                        </div>
                        <div class="col-12">
                            <label for="launch_date" class="form-label require"><b>Product's Launch Date</b></label>
                            <input type="date" placeholder="2023/10/28 10:15:57" class="form-control custom-input" id="datepicker"
                                name="launch_date" value="{{ $data->launch_date }}">
                        </div>
                        <div class="col-12">
                            <label for="short_description" class="form-label"><b>Short Descriptions</b></label>
                            <textarea name="short_description" id="short_description" class="short_description" cols="30" rows="10"
                                placeholder="Write here your Short Descriptions">{!! $data->short_description !!}</textarea>
                        </div>
                        <div class="col-12">
                            <label for="description" class="form-label"><b>Long Descriptions</b></label>
                            <textarea name="description" id="description" class="description" cols="30" rows="10"
                                placeholder="Write here your Long Descriptions">{!! $data->description !!}</textarea>
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