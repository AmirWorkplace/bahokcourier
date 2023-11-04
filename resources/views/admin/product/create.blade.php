@extends('layouts.admin.app')

@section('content')
<div class="row g-3">
    <div class="col-12">
        <form action="{{ Route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="card-header px-3 py-2">
                    <div class="d-flex justify-content-between align-items-center">
                        <h6 class="h6 mb-0 text-uppercase">Add Products</h6>
                        <a href="{{ Route('admin.product.index') }}" class="btn btn-primary btn-sm text-uppercase">
                            Go Back
                        </a>
                    </div>
                </div>
                <div class="card-body p-4">
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="name" class="form-label require"><b>Product Name</b></label>
                            <input type="text" placeholder="Product Name" class="form-control custom-input" id="name" autocomplete="on"
                                name="name" required>
                        </div>
                            <label for="title" class="form-label require"><b>Product Title</b></label>
                            <input type="text" placeholder="Product Title" class="form-control custom-input" id="title" autocomplete="on"
                                name="title" required>
                        </div>
                        <div class="col-12">
                            <label for="images" class="form-label require"><b>Product Images</b></label>
                            <input type="file" class="form-control custom-input" id="images" name="images[]" multiple required>
                        </div>
                        <div class="col-12">
                            <label for="video" class="form-label require"><b>Product Video's Youtube Embed Url </b></label>
                            <input type="text" placeholder="https://www." class="form-control custom-input" id="video"
                                name="video">
                        </div>
                        <div class="col-12">
                            <label for="tags" class="form-label require"><b>Product Tags</b></label>
                            <input type="text" placeholder="Web Design, Web Development, Database Management" class="form-control custom-input" id="tags"
                                name="tags" required>
                        </div>
                        <div class="col-12">
                            <label for="creator" class="form-label require"><b>Product's Creator</b></label>
                            <input type="text" placeholder="Creator Name" class="form-control custom-input" id="creator"
                                name="creator">
                        </div>
                        <div class="col-12">
                            <label for="launch_date" class="form-label require"><b>Product's Launch Date</b></label>
                            <input type="date" placeholder="2023/10/28 10:15:57" class="form-control custom-input" id="datepicker"
                                name="launch_date">
                        </div>
                        <div class="col-12">
                            <label for="short_description" class="form-label"><b>Short Descriptions</b></label>
                            <textarea name="short_description" id="short_description" class="short_description" cols="30" rows="10"
                                placeholder="Write here your Short Descriptions"></textarea>
                        </div>
                        <div class="col-12">
                            <label for="description" class="form-label"><b> Long Descriptions</b></label>
                            <textarea name="description" id="description" class="description" cols="30" rows="10"
                                placeholder="Write here your Long Descriptions"></textarea>
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