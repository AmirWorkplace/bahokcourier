
@extends('layouts.admin.app')

@section('content')
<style>
    .table tbody tr td input{
        border: 2px solid rgb(200, 255, 0);
        background: #ececec;
    }

    p.input input{
        margin: 0;
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
</style>
<div class="row g-3">
    <div class="col-12">
        <form action="{{ Route('admin.delivery-item.update', $data->id) }}" method="POST" enctype="multipart/form-data" id="delivery-item-form">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-header px-3 py-2">
                    <div class="d-flex justify-content-between align-items-center">
                        <h6 class="h6 mb-0 text-uppercase">Edit Delivery Items Setup</h6>
                        <a href="{{ Route('admin.delivery-item.index') }}" class="btn btn-primary btn-sm text-uppercase">
                            Go Back
                        </a>
                    </div>
                </div>
                <div class="card-body p-4">
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="title" class="form-label require"><b>Delivery Title</b></label>
                            <input type="text" value="{{ $data->title }}" class="form-control custom-input" id="title"
                                name="title">
                        </div>    
                        <div class="col-md-4 col-12">
                            <label for="qty" class="form-label require"><b>Delivery Qty</b></label>
                            <input type="text" value="{{ $data->qty }}" class="form-control custom-input input-number" id="qty" name="qty">
                        </div>   
                        <div class="col-md-4 col-12">
                            <label for="time" class="form-label require"><b>Delivery Duration</b></label>
                            <input type="text" value="{{ $data->time }}" class="form-control custom-input input-number" id="time" name="time">
                        </div>   
                        <div class="col-md-4 col-12">
                            <label for="serial" class="form-label require"><b>Priority serial</b></label>
                            <input type="number" value="{{ $data->serial }}" class="form-control custom-input input-number" id="serial" name="serial">
                        </div>   
                        <div class="col-12">
                            <label for="weight" class="form-label require"><b>Delivery Attributes</b></label>
                            <select name="weight_ids[]" multiple id="weight_ids" class="select form-control" data-placeholder="Select Weight Attributes">
                                <option value=""></option>
                                @foreach (App\Models\DeliveryWeightSetup::where('status', true)->orderBy('serial', 'asc')->get() as $item)
                                    <option value="{{ $item }}"
                                        {{ in_array($item->id, $weight_ids) ? 'selected' : '' }}
                                    >
                                        {{ $item->attribute }}
                                        {{ $item->weight }}
                                        {{ $item->unit }}
                                    </option>
                                @endforeach
                            </select>
                        </div>   
                        <div class="col-12">
                            <table class="table table-bordered text-center">
                                <thead class="table-bordered">
                                    <tr>
                                        <th>Weight</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody id="tbody">
                                    
                                </tbody>
                            </table>
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
@push('js')
    <script>
        const current_data = @json($delivery_item);

        $(document).ready(function(){
            $(document).on('change', '#weight_ids',function(){
                const deliveryPriceTable = $(this).val().map((item) => {
                    const delivery_price = JSON.parse(item);
                    const attribute = `${delivery_price.attribute ? delivery_price.attribute : ''} ${delivery_price.weight} ${delivery_price.unit}`;
                    return setTbody({ attribute, price_id: delivery_price.id, price: '' })
                });

                console.log(deliveryPriceTable);
                $('#tbody').html(deliveryPriceTable.join(""));
            });

            function setTbody({ attribute, price_id, price }){
                return `
                    <tr>
                        <td>${attribute}</td>
                        <td style="max-width: 200px !important;">
                            <p class="input">
                                <input value="${price}" required min="0" type="number" name="price_${price_id}" class="form-control text-center custom-input">
                            </p>
                        </td>
                    </tr>
                `;
            }


            (function(){
                const deliveryPriceTable = current_data.delivery_prices.map((item) => {
                    const attribute = `${item.delivery_weights.attribute ? item.delivery_weights.attribute : ''} ${item.delivery_weights.weight} ${item.delivery_weights.unit}`;
                    return setTbody({ attribute, price_id: item.id, price: item.price })
                });

                console.log(deliveryPriceTable);
                $('#tbody').html(deliveryPriceTable.join(""));
            }())
        })
    </script>
@endpush