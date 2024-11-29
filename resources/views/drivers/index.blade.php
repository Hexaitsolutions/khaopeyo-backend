@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="card mb-4">
                <div class="card-widget-separator-wrapper">
                    <div class="card-body card-widget-separator">
                        <div class="row gy-4 gy-sm-1">
                            <div class="col-sm-6 col-lg-3 my-auto">
                                <div
                                    class="d-flex justify-content-between align-items-start card-widget-1 border-end pb-3 pb-sm-0">
                                    <div>
                                        <h4 class="mb-2"><b>24</b></h4>
                                        <p class="mb-0">Total Drivers</p>
                                    </div>
                                    <span class="avatar me-sm-4 my-auto">
                                                <span class="avatar-initial bg-label-secondary rounded"
                                                ><img src="assets/svg/icons/Drivers.svg" class="sidebar-svg-icon"
                                                      style="width: 25px"/></span>
                                              </span>
                                </div>
                                <hr class="d-none d-sm-block d-lg-none me-4"/>
                            </div>
                            <div class="col-sm-6 col-lg-3">

                                <div
                                    class="d-flex justify-content-between align-items-start card-widget-2 border-end pb-3 pb-sm-0">
                                    <div>
                                        <h4 class="mb-2"><b>165</b></h4>
                                        <p class="mb-0">Total Active</p>
                                    </div>
                                    <span class="avatar me-sm-4 my-auto">
                                                <span class="avatar-initial bg-label-secondary rounded"
                                                ><img src="assets/svg/icons/checks.svg" class="sidebar-svg-icon"
                                                      style="width: 25px"/></span>
                                              </span>
                                </div>
                                <hr class="d-none d-sm-block d-lg-none"/>
                            </div>
                            <div class="col-sm-6 col-lg-3">

                                <div
                                    class="d-flex justify-content-between align-items-start card-widget-1 border-end pb-3 pb-sm-0">
                                    <div>
                                        <h4 class="mb-2"><b>256</b></h4>
                                        <p class="mb-0">Total Offline</p>
                                    </div>
                                    <span class="avatar me-sm-4 my-auto">
                                                <span class="avatar-initial bg-label-secondary rounded"
                                                ><img src="assets/svg/icons/cross.svg" class="sidebar-svg-icon"
                                                      style="width: 25px"/></span>
                                              </span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div
                                    class="d-flex justify-content-between align-items-start card-widget-1 pb-3 pb-sm-0">
                                    <div>
                                        <h4 class="mb-2"><b>4.2</b></h4>
                                        <p class="mb-0">Average Rating</p>
                                    </div>
                                    <span class="avatar me-sm-4 my-auto">
                                                <span class="avatar-initial bg-label-secondary rounded"
                                                ><img src="assets/svg/icons/reviews.svg" class="sidebar-svg-icon"
                                                      style="width: 25px"/></span>
                                              </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product List Table -->
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Filter</h5>
                    <div class="d-flex justify-content-between align-items-center row py-3 gap-3 gap-md-0">
                        <div class="col-md-4 product_status"></div>
                        <div class="col-md-4 product_category"></div>
                        <div class="col-md-4 product_stock"></div>
                    </div>
                </div>
                <div class="card-datatable table-responsive">
                    <table class="datatables-products table">
                        <thead class="border-top">
                        <tr>
                            <th></th>
                            <th></th>
                            <th>product</th>
                            <th>category</th>
                            <th>stock</th>
                            <th>sku</th>
                            <th>status</th>
                            <th>actions</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="assets/js/app-driver-list.js"></script>
@endpush
