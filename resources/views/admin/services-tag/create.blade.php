
@extends('layouts.admin.app')

@section('content')
<div class="row g-3">
    <div class="col-12">
        <form action="{{ Route('admin.services-tag.store') }}" method="POST" enctype="multipart/form-data" id="services-tag-form">
            @csrf
            <div class="card">
                <div class="card-header px-3 py-2">
                    <div class="d-flex justify-content-between align-items-center">
                        <h6 class="h6 mb-0 text-uppercase">Add Services Tag</h6>
                        <a href="{{ Route('admin.services-tag.index') }}" class="btn btn-primary btn-sm text-uppercase">
                            Go Back
                        </a>
                    </div>
                </div>
                <div class="card-body p-4">
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="title" class="form-label require"><b>Services Tag Name</b></label>
                            <input type="text" placeholder="Name" class="form-control custom-input" id="title"
                                name="title" required>
                        </div>   
                        <div class="col-12">
                            <label for="serial" class="form-label require"><b>Priority serial</b></label>
                            <input type="number" value="1" class="form-control custom-input input-number" id="serial" name="serial">
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