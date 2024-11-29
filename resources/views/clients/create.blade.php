@extends('layouts.app')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="m-4">
        <div class="row" style="padding-left:calc(1.5 * 0.5)">
            <div class="col-12">
                <span>Clients / Client Details / Order Details</span>
            </div>
        </div>
        <div class="d-flex justify-content-between mt-3" style="padding-left:calc(1.5 * 0.5)">
            <div>
                <h4 style="margin-bottom: 0.3rem"><b>Order #6976</b></h4><span>Frday Apr 15,2024, 10:21</span>
            </div>
            <div>
                <button class="p-2 px-2 py-2"
                    style="background-color: #FF4C5129;border:none;color:#FF4C51;border-radius:10px">Delete
                    Order</button>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="m-4" style="text-align: center">
                            <img id="imagePreview" style="width:100px; height:100px ;border-radius:10px"
                                src="http://127.0.0.1:8000/assets/img/avatars/1.png" alt="Image Preview"
                                class="img-fluid">
                            <h5 class="mt-3"> Abdul Arshand</h5>
                        </div>
                        <div class="d-flex justify-content-around">
                            <div class="d-flex align-items-center">
                                <span
                                    style="background-color: #FF4C51; color: white; padding: 8px; border-radius: 5px;">
                                    <img src="assets/svg/icons/shopping-cart.svg" class="sidebar-svg-icon" />
                                </span>
                                <span style="padding-left: 20px;">
                                    <span>184</span>
                                    <span><br>Order</span>
                                </span>
                            </div>
                            <div class="d-flex align-items-center">
                                <span
                                    style="background-color: #FF4C51; color: white; padding: 8px; border-radius: 5px;">
                                    <img src="assets/svg/icons/shopping-cart.svg" class="sidebar-svg-icon" />
                                </span>
                                <span style="padding-left: 20px;">
                                    <span>184</span>
                                    <span><br>Order</span>
                                </span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h4 style="margin-bottom: 0.3rem"><b>Restaurant Information</b></h4>
                            </div>
                            <div>
                                <button class="p-2 px-2 py-2"
                                    style="background-color: #FF4C5129;border:none;color:#FF4C51;border-radius:10px">Go
                                    TO Restaurant Page</button>
                            </div>
                        </div>
                        <div>
                            <b class="mt-4">Owner Information</b>
                            <div class="mt-4">
                                <p style="margin-bottom: 0rem">Street 9 E-11/1, Islamabad, Pakistan</p>
                                <p>+9251 5566889</p>
                            </div>
                            <hr>
                            <div class="mt-4">
                                <b>Owner Information</b>
                                <h5 class="mt-4" style="margin-bottom: 0.5rem">Raja Omer</h5>
                                <p style="margin-bottom: 0rem">Street 9 E-11/1, Islamabad, Pakistan</p>
                                <p>+9251 5566889</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h4 style="margin-bottom: 0.3rem"><b>Order Details</b></h4>
                            </div>
                        </div>
                        <div class="mt-4">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <span>2X Beef Burger (100g)</span>
                                </div>
                                <div>
                                    <span>Rs. 999/-</span>
                                </div>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <span>NET</span>
                                </div>
                                <div>
                                    <span>Rs. 999/-</span>
                                </div>

                            </div>
                            <div class="d-flex justify-content-between mt-1">

                                <div>
                                    <span>VAT</span>
                                </div>
                                <div>
                                    <span>Rs. 999/-</span>
                                </div>

                            </div>
                            <div class="d-flex justify-content-between mt-3">

                                <div>
                                    <span><b>Total</b></span>
                                </div>
                                <div>
                                    <span>Rs. 999/-</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script src="assets/js/app-driver-list.js"></script>
<script>
    function previewImage(event) {
            const input = event.target;
            const reader = new FileReader();

            reader.onload = function () {
                const imagePreview = document.getElementById('imagePreview');
                imagePreview.src = reader.result;
                imagePreview.style.display = 'block';
            }

            if (input.files && input.files[0]) {
                reader.readAsDataURL(input.files[0]);
            }
        }
</script>
@endpush