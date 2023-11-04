@extends('layouts.admin.app')

@section('content')
<div class="row g-3">
    <div class="col-12">
        <form action="{{ Route('admin.delivery-weight.update', $data->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-header px-3 py-2">
                    <div class="d-flex justify-content-between align-items-center">
                        <h6 class="h6 mb-0 text-uppercase">Delivery Weight Edit</h6>
                        <a href="{{ Route('admin.delivery-weight.index') }}" class="btn btn-primary btn-sm text-uppercase">Go
                            Back</a>
                    </div>
                </div>
                <div class="card-body p-4">
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="attribute" class="form-label require"><b>Delivery Weight Attribute</b></label>
                            <input type="text" value="{{ $data->attribute }}" class="form-control custom-input" id="attribute"
                                name="attribute">
                        </div>   
                        <div class="col-12">
                            <label for="weight" class="form-label require"><b>Delivery Weight</b></label>
                            <input type="number" value="{{ $data->weight }}" class="form-control custom-input" id="weight"
                                name="weight">
                        </div>   
                        <div class="col-12">
                            <label for="unit" class="form-label require"><b>Delivery Weight Unit</b></label>
                            <input type="text" value="{{ $data->unit }}" class="form-control custom-input" id="unit"
                                name="unit">
                        </div>   
                        <div class="col-12">
                            <label for="serial" class="form-label require"><b>Priority serial</b></label>
                            <input type="number" value="{{ $data->serial }}" class="form-control custom-input input-number" id="serial" name="serial">
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