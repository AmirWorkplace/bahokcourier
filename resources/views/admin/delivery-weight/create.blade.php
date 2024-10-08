
@extends('layouts.admin.app')

@section('content')
<div class="row g-3">
    <div class="col-12">
        <form action="{{ Route('admin.delivery-weight.store') }}" method="POST" enctype="multipart/form-data" id="delivery-weight-form">
            @csrf
            <div class="card">
                <div class="card-header px-3 py-2">
                    <div class="d-flex justify-content-between align-items-center">
                        <h6 class="h6 mb-0 text-uppercase">Add Delivery Weight Setup</h6>
                        <a href="{{ Route('admin.delivery-weight.index') }}" class="btn btn-primary btn-sm text-uppercase">
                            Go Back
                        </a>
                    </div>
                </div>
                <div class="card-body p-4">
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="attribute" class="form-label require"><b>Delivery Weight Attribute</b></label>
                            <input type="text" placeholder="Upto / Less then" class="form-control custom-input" id="attribute"
                                name="attribute">
                        </div>   
                        <div class="col-12">
                            <label for="weight" class="form-label require"><b>Delivery Weight</b></label>
                            <input type="number" placeholder="weight..." class="form-control custom-input" id="weight"
                                name="weight">
                        </div>   
                        <div class="col-12">
                            <label for="unit" class="form-label require"><b>Delivery Weight Unit</b></label>
                            <input type="text" placeholder="kg/gm" class="form-control custom-input" id="unit"
                                name="unit">
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