@extends('layouts.admin.app')

@push('css')
    <link rel="stylesheet" href="{{ asset('backend/css/jquery.minicolors.css') }}">
@endpush

@section('content')
    <form action="{{ Route('admin.contact.update', isset($data->id) ? $data->id : '1') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row g-3">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h6 class="h6 mb-0 py-5px">
                            @if ($data)
                                Update Contact
                            @else   
                                Create Contact
                            @endif
                        </h6>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-md-4 col-6">
                                <label for="heading" class="form-label require"><b>Contact Heading</b></label>
                                <input type="text" required placeholder="Contact Heading" class="form-control custom-input" id="heading" name="heading" value="{{ $data ? $data->heading : '' }}" minlength="6" maxlength="254" />
                            </div>
                            <div class="col-md-4 col-6">
                                <label for="primary_mobile" class="form-label require"><b>Contact Primary Mobile</b></label>
                                <input type="text" required placeholder="+880 1789******" class="form-control custom-input" id="primary_mobile"
                                    name="primary_mobile" value="{{ $data ? $data->primary_mobile : '' }}" minlength="6" maxlength="254" />
                            </div> 
                            <div class="col-md-4 col-6">
                                <label for="secondary_mobile" class="form-label require"><b>Contact Secondary Mobile</b></label>
                                <input type="text" placeholder="+880 1789******" class="form-control custom-input" id="secondary_mobile"
                                    name="secondary_mobile" value="{{ $data ? $data->secondary_mobile : '' }}" minlength="6" maxlength="254" />
                            </div> 
                            <div class="col-md-4 col-6">
                                <label for="primary_email" class="form-label require"><b>Contact Primary E-mail</b></label>
                                <input type="text" required placeholder="example@yourname.gmail.com" class="form-control custom-input" id="primary_email"
                                    name="primary_email" value="{{ $data ? $data->primary_email : '' }}" minlength="6" maxlength="254" />
                            </div> 
                            <div class="col-md-4 col-6">
                                <label for="secondary_email" class="form-label require"><b>Contact Secondary E-mail</b></label>
                                <input type="text" placeholder="example@yourname.gmail.com" class="form-control custom-input" name="secondary_email" id="secondary_email" minlength="6" maxlength="254"
                                    value="{{ $data ? $data->secondary_email : '' }}" />
                            </div> 
                            <div class="col-md-4 col-6">
                                <label for="map_url" class="form-label require"><b>Contact Map Location</b></label>
                                <input type="text" placeholder="https://www." class="form-control custom-input" name="map_url" id="map_url" minlength="6" maxlength="254"
                                    value="{{ $data ? $data->map_url : '' }}" />
                            </div> 
                            <div class="col-md-4 col-6">
                                <label for="title" class="form-label require">
                                    <b>Contact Short Title</b>
                                </label>
                                <textarea id="title" name="title" cols="30" rows="10" class="short_description">
                                    {!! $data ? $data->title : '' !!}
                                </textarea>
                            </div> 
                            <div class="col-md-4 col-6">
                                <label for="title" class="form-label require">
                                    <b>Contact Address</b>
                                </label>
                                <textarea id="address" name="address" cols="30" rows="10" class="short_description" required>
                                    {!! $data ? $data->address : '' !!}
                                </textarea>
                            </div> 
                            <div class="col-md-4 col-6">
                                <label for="title" class="form-label require">
                                    <b>Write about working time</b>
                                </label>
                                <textarea id="work_time" name="work_time" cols="30" rows="10" class="short_description" required>
                                    {!! $data ? $data->work_time : '' !!}
                                </textarea>
                            </div> 
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <div class="py-1">
                            <button type="submit" class="btn btn-sm btn-primary">
                                @if ($data)
                                    Update Now  
                                @else   
                                    Create Now 
                                @endif
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

@push('js')
    <script type="text/javascript" src="{{ asset('backend/js/jquery.minicolors.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            if ($('.color').length) {
                $(".color").each(function() {
                    $(this).minicolors();
                });
            }
        });
    </script>
@endpush