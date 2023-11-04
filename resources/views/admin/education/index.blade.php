@extends('layouts.admin.app')

@section('content')
    <div class="row g-3">
        <div class="col-lg-4 order-lg-last">
            <form action="{{ Route('admin.education.store') }}" method="POST" enctype="multipart/form-data" id="addForm">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h6 class="h6 mb-0 py-5px">Add New Education</h6>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="start_year" class="form-label"><b>Start Year</b></label>
                                <input type="number" class="form-control" id="start_year" name="start_year" required
                                    placeholder="Start Year" value="{{ old('start_year') }}">
                            </div>
                            <div class="col-12">
                                <label for="end_year" class="form-label"><b>End Year</b></label>
                                <input type="number" class="form-control" id="end_year" name="end_year" required
                                    placeholder="End Year" value="{{ old('end_year') }}">
                            </div>
                            <div class="col-12">
                                <label for="degree" class="form-label"><b>Degree</b></label>
                                <input type="text" class="form-control" id="degree" name="degree" required
                                    placeholder="degree" value="{{ old('degree') }}">
                            </div>
                            <div class="col-12">
                                <label for="institute" class="form-label"><b>Institute</b></label>
                                <input type="text" class="form-control" id="institute" name="institute" required
                                    placeholder="institute" value="{{ old('institute') }}">
                            </div>
                            <div class="col-12">
                                <label for="description" class="form-label"><b>Description</b></label>
                                <textarea name="description" id="description" cols="30" rows="3" class="form-control"
                                    placeholder="Description" required>{{ old('description') }}</textarea>
                            </div>
                            <div class="col-12">
                                <label for="status" class="form-label"><b>Status</b></label>
                                <select name="status" id="status" class="form-select" required>
                                    <option value="1" selected>Active</option>
                                    <option value="0">Deactive</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <button type="submit" class="btn btn-sm btn-primary">Add New</button>
                    </div>
                </div>
            </form>

            <form action="" method="POST" id="editForm" enctype="multipart/form-data" style="display: none;">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-header">
                        <h6 class="h6 mb-0 py-5px">Edit Education</h6>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="old_start_year" class="form-label"><b>Start Year</b></label>
                                <input type="number" class="form-control" id="old_start_year" name="start_year" required
                                    placeholder="Start Year">
                            </div>
                            <div class="col-12">
                                <label for="old_end_year" class="form-label"><b>End Year</b></label>
                                <input type="number" class="form-control" id="old_end_year" name="end_year" required
                                    placeholder="End Year">
                            </div>
                            <div class="col-12">
                                <label for="old_degree" class="form-label"><b>Degree</b></label>
                                <input type="text" class="form-control" id="old_degree" name="degree" required
                                    placeholder="degree Year">
                            </div>
                            <div class="col-12">
                                <label for="old_institute" class="form-label"><b>Institute</b></label>
                                <input type="text" class="form-control" id="old_institute" name="institute" required
                                    placeholder="institute Year">
                            </div>
                            <div class="col-12">
                                <label for="old_description" class="form-label"><b>Description</b></label>
                                <textarea name="description" id="old_description" cols="30" rows="3" placeholder="Description"
                                    class="form-control" required></textarea>
                            </div>
                            <div class="col-12">
                                <label for="old_status" class="form-label"><b>Status</b></label>
                                <select name="status" id="old_status" class="form-select" required>
                                    <option value="1" selected>Active</option>
                                    <option value="0">Deactive</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <div class="d-flex justify-content-between">
                            <button type="button" class="btn btn-sm btn-warning" id="cancelBtn">Cancel</button>
                            <button type="submit" class="btn btn-sm btn-primary">Update Client</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header p-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h6 class="h6 mb-0 text-uppercase">Education Setup</h6>
                    </div>
                </div>
                <div class="card-body">
                    <table class="dataTable table align-middle" style="width:100%">
                        <thead>
                            <tr class="text-nowrap">
                                <th width="3"></th>
                                <th>Start year</th>
                                <th>End Year</th>
                                <th>Institute</th>
                                <th>Degree</th>
                                <th>Status</th>
                                <th width="110" class="text-end">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th class="text-center" colspan="1">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="selectAll">
                                        <label class="custom-control-label" for="selectAll"></label>
                                    </div>
                                </th>
                                <th colspan="6">
                                    <button type="button" name="bulk_delete"
                                        data-url="{{ Route('admin.education.destroy', '0') }}" id="bulk_delete"
                                        class="btn btn btn-xs btn-danger">Delete</button>
                                </th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script type="text/javascript">
        $(document).ready(function() {
            var table = $('.dataTable').dataTable({
                processing: true,
                serverSide: true,
                scrollX: true,
                ajax: {
                    url: "{{ Route('admin.education.index') }}",
                    type: "GET",
                },
                columns: [{
                        data: "checkbox",
                        name: "checkbox",
                        orderable: false,
                        searchable: false,
                        width: '3'
                    },
                    {
                        data: 'start_year',
                        name: 'start_year'
                    },
                    {
                        data: 'end_year',
                        name: 'end_year'
                    },
                    {
                        data: 'institute',
                        name: 'institute'
                    },
                    {
                        data: 'degree',
                        name: 'degree'
                    },
                    {
                        data: 'status',
                        name: 'status'
                    },
                    {
                        data: 'actions',
                        name: 'actions',
                        orderable: false,
                        searchable: false,
                        className: "text-end",
                    },
                ]
            });

            $(document).on('click', '.link-edit', function(e) {
                e.preventDefault();
                let url = $(this).data('url');
                $.ajax({
                    url: url,
                    data: {
                        _method: 'GET',
                    },
                    success: (response) => {
                        if (response.status == 'success') {
                            $('#editForm').attr('action', response.form_link);
                            $('#old_start_year').val(response.data.start_year);
                            $('#old_end_year').val(response.data.end_year);
                            $('#old_degree').val(response.data.degree);
                            $('#old_institute').val(response.data.institute);
                            $('#old_description').val(response.data.description);
                            $('#old_status').val(response.data.status);
                            $('#editForm').show();
                            $('#addForm').hide();
                        }
                        if (response.status == 'error') {
                            Swal.fire({
                                width: "22rem",
                                title: "Failed!",
                                text: "You don't have any Authority to do this action",
                                icon: "error",
                                showConfirmButton: false,
                                timer: 1500
                            });
                        }
                    }
                });
            });
        });
    </script>
@endpush
