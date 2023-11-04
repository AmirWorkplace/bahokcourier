@extends('layouts.admin.app')

@push('css')
    <link rel="stylesheet" href="{{ asset('backend/css/jquery.minicolors.css') }}">
@endpush

@section('content')
    <form action="{{ Route('admin.about-details.update', isset($data->id) ? $data->id : '1') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row g-3">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h6 class="h6 mb-0 py-5px">
                            @if ($data)
                                Update About
                            @else   
                                Create About
                            @endif
                        </h6>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-md-4 col-6">
                                <label for="heading" class="form-label require"><b>About Heading</b></label>
                                <input type="text" required placeholder="About Details Heading" class="form-control custom-input" id="heading" name="heading" value="{{ $data ? $data->heading : '' }}" minlength="6" maxlength="254" />
                            </div>
                            <div class="col-md-4 col-6">
                                <label for="title" class="form-label require"><b>About Title</b></label>
                                <input type="text" required placeholder="About Title" class="form-control custom-input" id="title" name="title" value="{{ $data ? $data->title : '' }}" minlength="6" maxlength="254" />
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label for="image" class="form-label"><b>About Details Image</b></label>
                                <input type="file" id="image" name="image" class="form-control" accept="image/*"
                                {{ $data && file_exists($data->image) ? '' : 'required' }}>

                                @if ($data && file_exists($data->image))
                                    <div class="pt-2">
                                        <img src="{{ asset($data->image) }}" height="50" alt="image">
                                    </div>
                                @endif
                            </div> 
                            <div class="col-12">
                                <label for="title" class="form-label require">
                                    <b>About Short Description</b>
                                </label>
                                <textarea id="short_description" name="short_description" cols="30" rows="10" class="short_description">
                                    {!! $data ? $data->short_description : '' !!}
                                </textarea>
                            </div> 
                            <div class="col-12">
                                <label for="title" class="form-label require">
                                    <b>About Description</b>
                                </label>
                                <textarea id="description" name="description" cols="30" rows="10" class="description">
                                    {!! $data ? $data->description : '' !!}
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