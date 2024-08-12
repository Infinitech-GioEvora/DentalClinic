@extends('Layouts.Admin.Layout')

@section('title', 'Dashboard')

@section('content')
    <div class="card">
        <div class="row pt-4 px-4 py-4">
            <div class="col-md-6">
                <h4>Dashboard</h4>
            </div>
        </div>

        <div class="row mx-2">
            <h5>Schedules</h5>
            <div class="col-lg-3 col-md-12 col-6 mb-4 count">
                <div class="card">
                    <div class="row">
                        <div class="col-3 d-flex justify-content-center align-items-center ms-4">
                            <i class='bx bx-calendar'></i>
                        </div>
                        <div class="col my-3">
                            <span class="fw-semibold d-block mb-1">All</span>
                            <h3 class="card-title text-nowrap mb-2"></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 col-6 mb-4 count">
                <div class="card">
                    <div class="row">
                        <div class="col-3 d-flex justify-content-center align-items-center ms-4">
                            <i class='bx bx-calendar'></i>
                        </div>
                        <div class="col my-3">
                            <span class="fw-semibold d-block mb-1">Accepted</span>
                            <h3 class="card-title text-nowrap mb-2"></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 col-6 mb-4 count">
                <div class="card">
                    <div class="row">
                        <div class="col-3 d-flex justify-content-center align-items-center ms-4">
                            <i class='bx bx-calendar'></i>
                        </div>
                        <div class="col my-3">
                            <span class="fw-semibold d-block mb-1">Declined</span>
                            <h3 class="card-title text-nowrap mb-2"></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 col-6 mb-4 count">
                <div class="card">
                    <div class="row">
                        <div class="col-3 d-flex justify-content-center align-items-center ms-4">
                            <i class='bx bx-calendar'></i>
                        </div>
                        <div class="col my-3">
                            <span class="fw-semibold d-block mb-1">Pending</span>
                            <h3 class="card-title text-nowrap mb-2"></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection

@section('scripts')
    @parent

    <script src="{{ asset('js/Admin/Dashboard.js') }}"></script>
@endsection
