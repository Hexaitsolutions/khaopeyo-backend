@extends('layouts.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="card-body">
                <form class="browser-default-validation">
                    <div class="row">
                        <div class="col-12">
                            <h5>Drivers / Add New Driver</h5>
                        </div>
                        <div class="container mt-5">
                            <div class="d-flex">
                                <div class="mb-3">
                                    <img id="imagePreview" style="width:100px; height:100px ;border-radius:10px"
                                         src="{{ asset('assets/img/avatars/1.png') }}" alt="Image Preview" class="img-fluid"/>
                                </div>
                                <div class="my-auto">
                                    <div class="mb-3 ms-4">
                                        <input type="file" id="fileInput" accept="image/*"
                                               style="display: none;" onchange="previewImage(event)">
                                        <!-- Custom button to trigger the file input -->
                                        <button type="button" class="btn btn-primary"
                                                onclick="document.getElementById('fileInput').click();">
                                            Upload New Photo
                                        </button>
                                    </div>
                                    <div class="ms-4">
                                        <span>Allowed JPG, GIF or PNG. Max size of 800K</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md mb-4 mb-md-0">

                            <div class="mb-3">
                                <label class="form-label" for="firstName">First Name</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="firstName"
                                    placeholder="John Doe"
                                    required/>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="email">Email</label>
                                <input
                                    type="email"
                                    id="email"
                                    class="form-control"
                                    placeholder="john.doe"
                                    required/>
                            </div>
                            <div class="mb-3 form-password-toggle">
                                <label class="form-label" for="phone">Phone</label>
                                <div class="input-group input-group-merge">
                                    <input
                                        type="text"
                                        id="phone"
                                        class="form-control"
                                        placeholder="+92 3365407175"
                                        aria-describedby="basic-default-password3"
                                        required/>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="country">Country</label>
                                <select class="form-select" id="country" required>
                                    <option value="">Select Country</option>
                                    <option value="usa">USA</option>
                                    <option value="uk">UK</option>
                                    <option value="france">France</option>
                                    <option value="australia">Australia</option>
                                    <option value="spain">Spain</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="cnic">CNIC</label>
                                <input
                                    type="text"
                                    class="form-control flatpickr-validation"
                                    id="cnic"
                                    placeholder="37201-9455356-3"
                                    required/>
                            </div>

                        </div>
                        <div class="col-md mb-4 mb-md-0">

                            <div class="mb-3">
                                <label class="form-label" for="lastName">Last Name</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="lastName"
                                    placeholder="John Doe"
                                    required/>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="organisation">Organization</label>
                                <input
                                    type="organisation"
                                    id="basic-default-email"
                                    class="form-control"
                                    placeholder="john.doe"
                                    required/>
                            </div>
                            <div class="mb-3 form-password-toggle">
                                <label class="form-label" for="address">Address</label>
                                <div class="input-group input-group-merge">
                                    <input
                                        type="text"
                                        id="address"
                                        class="form-control"
                                        placeholder="Address"
                                        required/>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="city">City</label>
                                <select class="form-select" id="city" required>
                                    <option value="">Select Country</option>
                                    <option value="usa">USA</option>
                                    <option value="uk">UK</option>
                                    <option value="france">France</option>
                                    <option value="australia">Australia</option>
                                    <option value="spain">Spain</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="drivingLicenceNumber">Driving Licence
                                    Number</label>
                                <input
                                    type="text"
                                    class="form-control flatpickr-validation"
                                    placeholder="Driving Licence Number"
                                    id="drivingLicenceNumber"
                                    required/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
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
