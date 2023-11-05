
@extends('layouts.admin.app')

@section('content')
<div class="row g-3">
    <div class="col-12">
        <form action="{{ Route('admin.branch.store') }}" method="POST" enctype="multipart/form-data" id="branch-form">
            @csrf
            <div class="card">
                <div class="card-header px-3 py-2">
                    <div class="d-flex justify-content-between align-items-center">
                        <h6 class="h6 mb-0 text-uppercase">Add Branch Setup</h6>
                        <a href="{{ Route('admin.branch.index') }}" class="btn btn-primary btn-sm text-uppercase">
                            Go Back
                        </a>
                    </div>
                </div>
                <div class="card-body p-4">
                    <div class="row g-3">
                        <div class="col-md-4 col-sm-6">
                            <label for="name" class="form-label require"><b>Branch Name</b></label>
                            <input type="text" placeholder="name" class="form-control custom-input" id="name"
                                name="name" required>
                        </div> 
                        <div class="col-md-4 col-sm-6">
                            <label for="primary_email" class="form-label require"><b>Primary Email</b></label>
                            <input type="text" placeholder="example@gmail.com" class="form-control custom-input" id="primary_email"
                                name="primary_email" required>
                        </div>   
                        <div class="col-md-4 col-sm-6">
                            <label for="secondary_email" class="form-label require"><b>Secondary E-mail</b></label>
                            <input type="text" placeholder="example@gmail.com" class="form-control custom-input" id="secondary_email"
                                name="secondary_email">
                        </div>   
                        <div class="col-md-4 col-sm-6">
                            <label for="primary_phone" class="form-label require"><b>Primary Phone</b></label>
                            <input type="text" placeholder="(+880) *******" class="form-control custom-input" id="primary_phone"
                                name="primary_phone" required>
                        </div>   
                        <div class="col-md-4 col-sm-6">
                            <label for="secondary_phone" class="form-label require"><b>Secondary Phone</b></label>
                            <input type="text" placeholder="(+880) *******" class="form-control custom-input" id="secondary_phone"
                                name="secondary_phone">
                        </div> 
                        <div class="col-md-4 col-sm-6">
                            <label for="serial" class="form-label require"><b>Priority serial</b></label>
                            <input type="number" value="1" class="form-control custom-input input-number" id="serial" name="serial">
                        </div>
                        <div class="col-12">
                            <label for="address" class="form-label require"><b>Branch Address</b></label>
                            <textarea name="address" required id="address" cols="30" rows="4" placeholder="Write Address" class="form-control"></textarea>
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