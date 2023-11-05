@extends('layouts.admin.app')

@section('content')
<div class="row g-3">
    <div class="col-12">
        <div class="card">
            <div class="card-header px-3 py-2">
                <div class="d-flex justify-content-between align-items-center">
                    <h6 class="h6 mb-0 text-uppercase">Manage Branches</h6>
                    <a href="{{ Route('admin.branch.create') }}" class="btn btn-primary btn-sm text-uppercase">Add
                        New</a>
                </div>
            </div>
            <div class="card-body">
                <table class="dataTable table align-middle" style="width:100%">
                    <thead>
                        <tr class="text-nowrap">
                            <th width="3"></th>
                            <th>Branch Name</th>
                            <th>Address</th>
                            <th>Primary_email</th>
                            <th>Primary_phone</th>
                            <th>Priority Serial</th>
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
                            <th colspan="4">
                                <button type="button" name="bulk_delete"
                                    data-url="{{ Route('admin.branch.destroy', '0') }}" id="bulk_delete"
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
                    url: "{{ Route('admin.branch.index') }}",
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
                        data: 'name',
                        name: 'name',
                    },
                    {
                        data: 'address',
                        name: 'address',
                    },
                    {
                        data: 'primary_email',
                        name: 'primary_email',
                    },
                    {
                        data: 'primary_phone',
                        name: 'primary_phone',
                    },
                    {
                        data: 'serial',
                        name: 'serial',
                    }, 
                    {
                        data: 'status',
                        name: 'status',
                        orderable: false,
                        searchable: false,
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
        });
</script>
@endpush
