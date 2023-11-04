@extends('layouts.admin.app')

@section('content')
    <div class="row g-3">
        <div class="col-12">
            <form action="{{ $form_link }}" method="POST" id="update_form">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-header p-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <h6 class="h6 mb-0 text-uppercase">Update Blog</h6>
                            <a href="{{ Route('admin.blog.index') }}" class="btn btn-primary btn-sm text-uppercase">Go
                                Back</a>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="title" class="form-label"><b>Blog Title</b></label>
                                <input type="text" class="form-control custom-input" id="title" name="title"
                                    required value="{{ $data->title }}" placeholder="Blog Title">
                            </div>
                            <div class="col-12">
                                <label for="thumbnail" class="form-label"><b>Thumbnail</b></label>
                                <input type="file" class="form-control custom-input" id="thumbnail" name="thumbnail"
                                    accept="image/*">
                                @if (file_exists($data->thumbnail))
                                    <div class="pt-2">
                                        <img class="thumb" src="{{ asset($data->thumbnail) }}" alt=""
                                            height="60">
                                    </div>
                                @endif
                            </div>
                            <div class="col-12">
                                <label for="tags" class="form-label"><b>Tags</b></label>
                                @php
                                    $tags = explode('|', $data->tags);
                                @endphp
                                <input type="text" class="form-control custom-input" id="tags" name="tags"
                                    required placeholder="tags"
                                    value="@foreach ($tags as $key => $tag) {{ $key !== 0 ? ', ' : '' }} {{ $tag }} @endforeach">
                            </div>
                            <div class="col-12">
                                <label for="short_description" class="form-label"><b>Short Description</b></label>
                                <textarea name="short_description" id="short_description" class="form-control" cols="30" rows="4">{{ $data->short_description }}</textarea>
                            </div>
                            <div class="col-12">
                                <label for="description" class="form-label"><b>Description</b></label>
                                <textarea name="description" id="description" class="description" cols="30" rows="10">{!! $data->description !!}</textarea>
                            </div>
                            <div class="col-12">
                                <label for="status" class="form-label"><b>Status</b></label>
                                <div class="custom-select">
                                    <select class="form-control select2 custom-select__element" name="status" required
                                        id="status">
                                        <option value="1" {{ $data->status == 1 ? 'selected' : '' }}>Active</option>
                                        <option value="0" {{ $data->status == 0 ? 'selected' : '' }}>Inactive
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-end p-3">
                        <button type="submit" class="btn btn-primary btn-sm">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('js')
    <script type="text/javascript">
        $(document).ready(function() {

            // The DOM element you wish to replace with Tagify
            var input = document.querySelector('input[name=tags]');
            new Tagify(input);

        });
    </script>
@endpush
