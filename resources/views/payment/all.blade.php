@extends('layout.main')
@section('container')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <br>
                    <div class="card-body mx-4">
                        <!-- Payment -->
                        <div class="col-3">
                            <h1 class="text-dark">Payment</h1>
                        </div>
                        <br>
                        <div style="border-bottom: 2px solid #ACACAC; width: 540px;"></div>
                        <br>
                        <br>
                        <br>
                        <br>
                        <form action="">
                            <h4 class="text-dark fw-bold">Pay with :</h4>
                            <br>
                            <div class="form-check form-check-inline me-3">
                                <input class="form-check-input" type="radio" name="paymentMethod" id="paymentMethodCard"
                                    value="card" checked>
                                <label class="form-check-label form-check-label-custom fs-5 text-dark"
                                    for="paymentMethodCard">Card</label>
                            </div>
                            <div class="form-check form-check-inline me-3">
                                <input class="form-check-input" type="radio" name="paymentMethod" id="paymentMethodBank"
                                    value="bank">
                                <label class="form-check-label form-check-label-custom fs-5 text-dark"
                                    for="paymentMethodBank">Bank</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="paymentMethod"
                                    id="paymentMethodTransfer" value="transfer">
                                <label class="form-check-label form-check-label-custom fs-5 text-dark"
                                    for="paymentMethodTransfer">Transfer</label>
                            </div>
                            <br>
                            <br>
                            <br>
                            <div class="col-10">
                                <h4 class="text-dark fw-bold">Card Number</h4>
                                <div class="input-group">
                                    <input type="number" class="form-control" style="height: 40px; font-size: 12px;"
                                        placeholder="1234  5678  9101  1121">
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="col-10">
                                <div class="row mb-3">
                                    <div class="col">
                                        <h4 class="text-dark fw-bold">Expiration Date</h4>
                                        <input type="number" class="form-control" id="expirationDateInput"
                                            placeholder="MM/YY" style="height: 40px; font-size: 12px;">
                                    </div>
                                    <div class="col">
                                        <h4 class="text-dark fw-bold">CVV</h4>
                                        <input type="number" class="form-control" id="cvvInput" placeholder="123"
                                            style="height: 40px; font-size: 12px;">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="saveCardDetailsCheckbox"
                                    style="transform: scale(1.6);">
                                <label class="form-check-label text-muted" for="saveCardDetailsCheckbox"
                                    style="color: #ACACAC; font-size: 12px; margin-left: 10px;">Save card
                                    details</label>
                            </div>
                            <br>
                            <br>
                            <div class="col-10">
                                <button class="btn btn-primary d-flex align-items-center justify-content-center"
                                    style="background-color: #5463FF; width: 100%; height: 35px;">
                                    <a href="/home"><span style="color: white; font-size: 15px">Pay Rp 1.967.960</span></a>

                                </button>
                                <p style="color: #ACACAC; margin-top: 10px;">Your personal data will be used to process your
                                    order, support your experience throughout this website, and for other purposes described
                                    in
                                    our privacy policy.</p>
                            </div>
                        </form>
                        <div style="margin-bottom: 26%"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body mx-4">
                        <!-- Order-Summary -->
                        <div class="col-3">
                            <h1 class="text-dark">Order Summary</h1>
                        </div>
                        <br>
                        <div style="border-bottom: 2px solid #ACACAC; width: 540px;"></div>
                        <br>
                        <br>
                        <br>
                        <br>
                        <form action="">
                            <div class="row">
                                <div class="col-2">
                                    <img style="width: 50px; height: 50px;" src="{{ asset('img/kaguya.png') }}"
                                        alt="">
                                </div>
                                <div class="col-6">
                                    <h4 class="text-dark fw-bold">Kaguya - Love is War</h4>
                                </div>
                                <div class="col-3">
                                    <h4 class="text-dark fw-bold">Rp 100,000</h4>
                                    <h4 style="color: #ACACAC">Qty: 2</h4>
                                </div>
                            </div>
                            <br>
                            <br>
                            <div style="border-bottom: 2px solid #ACACAC; width: 540px;"></div>
                            <br>
                            <br>
                            <div class="col-10">
                                <div class="input-group">
                                    <input type="text" class="form-control" style="height: 40px; font-size: 12px;"
                                        placeholder="Gift or discount code">
                                    <div class="input-group-append">
                                        <button class="btn ms-2" type="button"
                                            style="height: 40px; width: 60px; background-color: #ACACAC; color: white; font-size: 12px">Kirim</button>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <br>
                            <div style="border-bottom: 2px solid #ACACAC; width: 540px;"></div>
                            <br>
                            <br>
                            <div class="row">
                                <div class="col-8">
                                    <h3 class="text-dark">Subtotal</h3>
                                    <br>
                                    <h3 class="text-dark">Shipping</h3>
                                </div>
                                <div class="col-3 text-right">
                                    <h3 class="text-dark">Rp 1,912,960</h3>
                                    <br>
                                    <h3 class="text-dark">Rp 50,000</h3>
                                </div>
                            </div>
                            <br>
                            <br>
                            <div style="border-bottom: 2px solid #ACACAC; width: 540px;"></div>
                            <br>
                            <br>
                            <div class="row">
                                <div class="col-7">
                                    <h3 class="text-dark">Total</h3>
                                    <h3 style="font-size: 11px; color: #ACACAC" class="">Including Rp 5.000 in taxes
                                    </h3>
                                </div>
                                <div class="col-4 text-right">
                                    <h3 style="font-size: 30px;" class="text-dark">Rp 1,967,960</h3>
                                </div>
                            </div>
                        </form>
                        <div style="margin-bottom: 30%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
