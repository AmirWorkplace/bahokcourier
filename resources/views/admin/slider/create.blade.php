@extends('layouts.admin.app')

@section('content')
<div class="row g-3">
    <div class="col-12">
        <form action="{{ Route('admin.slider.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="card-header px-3 py-2">
                    <div class="d-flex justify-content-between align-items-center">
                        <h6 class="h6 mb-0 text-uppercase">Add Slider Image</h6>
                        <a href="{{ Route('admin.slider.index') }}" class="btn btn-primary btn-sm text-uppercase">
                            Go Back
                        </a>
                    </div>
                </div>
                <div class="card-body p-4">
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="title" class="form-label require"><b>Slider Heading</b></label>
                            <input type="text" placeholder="Heading" class="form-control custom-input" id="heading" name="heading" required>
                        </div>
                        <div class="col-12">
                            <label for="title" class="form-label require"><b>Slider Title</b></label>
                            <input type="text" placeholder="Title" class="form-control custom-input" id="title" name="title">
                        </div> 
                        <div class="col-12">
                            <label for="name" class="form-label require"><b>Select Image</b></label>
                            <input type="file" class="form-control custom-input" id="image" name="image" required>
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