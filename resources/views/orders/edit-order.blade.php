<!-- //laravel's default navbar behavior -->
@extends('layouts.app')

<!-- Custom CSS -->
@push('styles')
<link href="https://cdn.jsdelivr.net/npm/smartwizard@5/dist/css/smart_wizard_all.min.css" rel="stylesheet" type="text/css" />
@endpush

<!-- //body content -->
@section('content')
<div class="container">
    <div class="col-sm-12">
    <h2>Add New Order</h2>
    <!--Order form -->
    <form method="POST" action="/order/{{ $order->id }}">
        <div id="smartwizard">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="#step-1">Customer information</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#step-2">Product information</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#step-3">Additional charge</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#step-4">Summary</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#step-5">Debit/Credit</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#step-6">Revenue Summary</a>
                </li>
            </ul>
           
            <div class="tab-content">
                <div id="step-1" class="tab-pane" role="tabpanel" aria-labelledby="step-1">
                <div class="form-group row">
                        <label for="inputName" class="col-sm-4 col-form-label col-form-label-lg">Name</label>
                        <div class="col-sm-7">
                            <input name="name" type="text" class="form-control" id="inputName" value="{{$order->name}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPhone" class="col-sm-4 col-form-label col-form-label-lg">Phone Number</label>
                        <div class="col-sm-7">
                            <input name="phone_number" type="tel" class="form-control" id="inputPhone" value="{{$order->phone_number}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail" class="col-sm-4 col-form-label col-form-label-lg">Email</label>
                        <div class="col-sm-7">
                            <input name="email" type="email" class="form-control" id="inputEmail" value="{{$order->email}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputAddress" class="col-sm-4 col-form-label col-form-label-lg">Address</label>
                        <div class="col-sm-7">
                            <input name="address" type="text" class="form-control" id="inputAddress" value="{{$order->address}}">
                        </div>
                    </div>
                </div>
                <div id="step-2" class="tab-pane" role="tabpanel" aria-labelledby="step-2">
                <div class="form-group row">
                        <label for="inputShipmentId" class="col-sm-4 col-form-label col-form-label-lg">Shipment ID</label>
                        <div class="col-sm-7">
                            <select name="shipment_id" class="form-control" id="inputShipmentId">
                                <option value="" disabled selected>Select Shipment ID</option>
                                <option value="JAN2020" <?=$order->shipment_id == 'JAN2020' ? ' selected="selected"' : '';?>>JAN2020</option>
                                <option value="FEB2020" <?=$order->shipment_id == 'FEB2020' ? ' selected="selected"' : '';?>>FEB2020</option>
                                <option value="MAR2020" <?=$order->shipment_id == 'MAR2020' ? ' selected="selected"' : '';?>>MAR2020</option>
                                <option value="APR2020" <?=$order->shipment_id == 'APR2020' ? ' selected="selected"' : '';?>>APR2020</option>
                                <option value="MAY2020" <?=$order->shipment_id == 'MAY2020' ? ' selected="selected"' : '';?>>MAY2020</option>
                                <option value="JUN2020" <?=$order->shipment_id == 'JUN2020' ? ' selected="selected"' : '';?>>JUN2020</option>
                                <option value="JUL2020" <?=$order->shipment_id == 'JUL2020' ? ' selected="selected"' : '';?>>JUL2020</option>
                                <option value="AUG2020" <?=$order->shipment_id == 'AUG2020' ? ' selected="selected"' : '';?>>AUG2020</option>
                                <option value="SEP2020" <?=$order->shipment_id == 'SEP2020' ? ' selected="selected"' : '';?>>SEP2020</option>
                                <option value="OCT2020" <?=$order->shipment_id == 'OCT2020' ? ' selected="selected"' : '';?>>OCT2020</option>
                                <option value="NOV2020" <?=$order->shipment_id == 'NOV2020' ? ' selected="selected"' : '';?>>NOV2020</option>
                                <option value="DEC2020" <?=$order->shipment_id == 'DEC2020' ? ' selected="selected"' : '';?>>DEC2020</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputCategory" class="col-sm-4 col-form-label col-form-label-lg">Category</label>
                        <div class="col-sm-7">
                            <select name="category" class="form-control" id="inputCategory">
                                <option value="" disabled selected>Select Category</option>
                                <option value="1" <?=$order->category == 1 ? ' selected="selected"' : '';?>>Hijab</option>
                                <option value="2" <?=$order->category == 2 ? ' selected="selected"' : '';?>>Cosmetics</option>
                                <option value="3" <?=$order->category == 3 ? ' selected="selected"' : '';?>>Skin Care</option>
                                <option value="4" <?=$order->category == 4 ? ' selected="selected"' : '';?>>Decor</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputProductName" class="col-sm-4 col-form-label col-form-label-lg">Product name</label>
                        <div class="col-sm-7">
                            <input name="product_name" type="text" class="form-control" id="inputProductName" value="{{$order->product_name}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputQuantity" class="col-sm-4 col-form-label col-form-label-lg">Quantity</label>
                        <div class="col-sm-7">
                            <input name="quantity" class="form-control" type="number" id="inputQuantity" value="{{$order->quantity}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPrice" class="col-sm-4 col-form-label col-form-label-lg">Price</label>
                        <div class="col-sm-7">
                            <input name="product_price" class="form-control" type="number" id="inputPrice" value="{{$order->product_price}}" aria-describedby="priceHelp">
                            <small id="priceHelp" class="form-text text-muted">Price shown in BDT (Bangladeshi Taka).</small>
                        </div>
                    </div>
                </div>
                <div id="step-3" class="tab-pane" role="tabpanel" aria-labelledby="step-3">
                    <<div class="form-group row">
                        <label for="inputWeightCharge" class="col-sm-4 col-form-label col-form-label-lg">Weight Charge</label>
                        <div class="col-sm-7">
                            <input name="weight_charge" class="form-control" type="number" id="inputWeightCharge" value="{{$order->weight_charge}}" aria-describedby="wChargeHelp">
                            <small id="wChargeHelp" class="form-text text-muted">Charge shown in BDT (Bangladeshi Taka).</small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputDeliveryCharge" class="col-sm-4 col-form-label col-form-label-lg">Delivery Charge</label>
                        <div class="col-sm-7">
                            <input name="delivery_charge" class="form-control" type="number" id="inputDeliveryCharge" value="{{$order->delivery_charge}}" aria-describedby="dChargeHelp">
                            <small id="dChargeHelp" class="form-text text-muted">Charge shown in BDT (Bangladeshi Taka).</small>
                        </div>
                    </div>
                </div>
                <div id="step-4" class="tab-pane" role="tabpanel" aria-labelledby="step-4">
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label col-form-label">Poduct price</label>
                        <label class="col-sm-4 col-form-label col-form-label" id="displayPrice">BDT {{$business['pp']}}</label>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label col-form-label">Additional charges</label>
                        <label class="col-sm-4 col-form-label col-form-label" id="displayCharge">BDT {{$business['ac']}}</label>
                    </div>

                    <!--Total amount-->
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label col-form-label-lg"><b>Amount</b></label>
                        <label class="col-sm-4 col-form-label col-form-label-lg" id="displayAmount"><b>BDT {{$business['ta']}}</b></label>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label col-form-label-lg"><b>Due</b></label>
                        <label class="col-sm-4 col-form-label col-form-label-lg" id="displayDue"><b>BDT {{$business['du']}}</b></label>
                    </div>
                </div>
                <div id="step-5" class="tab-pane" role="tabpanel" aria-labelledby="step-5">
                    <div class="form-group row">
                        <label for="inputPcost" class="col-sm-4 col-form-label col-form-label-lg">Product cost</label>
                        <div class="col-sm-7">
                            <input name="product_cost" class="form-control" type="number" id="inputPcost" value="{{$order->product_cost}}" aria-describedby="iPCostHelp">
                            <small id="iPCostHelp" class="form-text text-muted">Payment shown in BDT (Bangladeshi Taka).</small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputWcost" class="col-sm-4 col-form-label col-form-label-lg">Weight charge cost</label>
                        <div class="col-sm-7">
                            <input name="weight_cost" class="form-control" type="number" id="inputWcost" value="{{$order->weight_cost}}" aria-describedby="iWCostHelp">
                            <small id="iWCostHelp" class="form-text text-muted">*Delivery cost is included in COD credit. <br>Payment shown in BDT (Bangladeshi Taka).</small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputAdvPay" class="col-sm-4 col-form-label col-form-label-lg">Advance Payment</label>
                        <div class="col-sm-7">
                            <input name="advance_pay" class="form-control" type="number" id="inputAdvPay" value="{{$order->advance_pay}}" aria-describedby="aPayHelp">
                            <small id="aPayHelp" class="form-text text-muted">Payment shown in BDT (Bangladeshi Taka).</small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputCod" class="col-sm-4 col-form-label col-form-label-lg">COD credit</label>
                        <div class="col-sm-7">
                            <input name="cod_credit" class="form-control" type="number" id="inputCod" value="{{$order->cod_credit}}" aria-describedby="codHelp">
                            <small id="codHelp" class="form-text text-muted">Payment shown in BDT (Bangladeshi Taka).</small>
                        </div>
                    </div>
                </div>
                <div id="step-6" class="tab-pane" role="tabpanel" aria-labelledby="step-6">
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label col-form-label-lg">Gross sales</label>
                        <label class="col-sm-4 col-form-label col-form-label-lg" id="displayNsales">BDT {{$business['ta']}}</label>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label col-form-label-lg">Gross income</label>
                        <label class="col-sm-4 col-form-label col-form-label-lg" id="displayTincome">BDT {{$business['t-inc']}}</label>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label col-form-label-lg">Total expense</label>
                        <label class="col-sm-4 col-form-label col-form-label-lg" id="displayTexpense">BDT {{$business['t-exp']}}</label>
                    </div>
                    <div class="form-group row">
                        <!--Empty row-->
                    </div>
                    <div class="form-group row border-top border-dark">
                        <label class="col-sm-4 col-form-label col-form-label-lg mt-4">Net income</label>
                        <label class="col-sm-4 col-form-label col-form-label-lg mt-4" id="displayNincome"><b>BDT {{$business['n-inc']}}</b></label>
                    </div>
                </div>
            </div>
        </div>
    {{ csrf_field() }}
    </form>
    </div>
</div>

@endsection

<!-- Custom Scripts -->
@push('scripts')
<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
<!-- smartWizard Script -->
<script type="application/javascript" src="{{ asset('js/jquery.smartWizard.min.js') }}" ></script>
<!-- order Script -->
<script type="text/javascript" src="{{ asset('js/order.js') }}"></script>
@endpush