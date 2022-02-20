@extends('dashboard.partials.layout')

@section('dashboard.content-view')
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header p-1">
                    <h4 class="card-title float-left">Active Users - <span
                            class="blue-grey lighten-2 font-small-3 mb-0"></span></h4>
                    <span class="badge badge-pill badge-info float-right m-0">Approved</span>
                </div>

                <div class="card-content collapse show">
                    <div class="card-footer text-center p-1">
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="card pull-up border-top-info border-top-3 rounded-0">
                                    <div class="card-header">
                                        <h4 class="card-title" style="font-weight: 500;">Customer </h4>
                                    </div>
                                    <div class="card-content collapse show">
                                        <div class="card-body p-1">

                                            <h4 class="font-large-1 text-bold-400">
                                                <i class="ft-users float-left "></i>26 </h4>
                                        </div>
                                        <div class="card-footer p-1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-lg-2">
                                <div class="card pull-up border-top-primary border-top-3 rounded-0">
                                    <div class="card-header">
                                        <h4 class="card-title" style="font-weight: 500;">Beneficiary </h4>
                                    </div>
                                    <div class="card-content collapse show">
                                        <div class="card-body p-1">
                                            <h4 class="font-large-1 text-bold-400">20 <i
                                                    class="ft-users float-left "></i></h4>
                                        </div>
                                        <div class="card-footer p-1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-lg-2">
                                <div class="card pull-up border-top-golden border-top-3 rounded-0">
                                    <div class="card-header">
                                        <h4 class="card-title" style="font-weight: 500;">Employee </h4>
                                    </div>
                                    <div class="card-content collapse show">
                                        <div class="card-body p-1">
                                            <h4 class="font-large-1 text-bold-400">42 <i
                                                    class="ft-users float-left "></i></h4>
                                        </div>
                                        <div class="card-footer p-1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-lg-2">
                                <div class="card pull-up border-top-success border-top-3 rounded-0">
                                    <div class="card-header">
                                        <h4 class="card-title" style="font-weight: 500;">Supplier </h4>
                                    </div>
                                    <div class="card-content collapse show">
                                        <div class="card-body p-1">
                                            <h4 class="font-large-1 text-bold-400">26 <i
                                                    class="ft-users float-left "></i></h4>
                                        </div>
                                        <div class="card-footer p-1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-lg-2">
                                <div class="card pull-up border-top-danger border-top-3 rounded-0">
                                    <div class="card-header" style="font-weight: 500;">
                                        <h4 class="card-title">Partner </h4>
                                    </div>
                                    <div class="card-content collapse show">
                                        <div class="card-body p-1">
                                            <h4 class="font-large-1 text-bold-400">30 <i
                                                    class="ft-users float-left "></i></h4>
                                        </div>
                                        <div class="card-footer p-1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-lg-2">
                                <div class="card pull-up border-top-light border-top-3 rounded-0">
                                    <div class="card-header" style="font-weight: 500;">
                                        <h4 class="card-title">User </h4>
                                    </div>
                                    <div class="card-content collapse show">
                                        <div class="card-body p-1">
                                            <h4 class="font-large-1 text-bold-400">65 <i
                                                    class="ft-users float-left "></i></h4>
                                        </div>
                                        <div class="card-footer p-1">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <section>
        <div class="row" id="linechart">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row ">

                            <div class="col-md-1" onclick="getlinechart()"><i class="fa fa-area-chart fa-2x"
                                                                              aria-hidden="true"
                                                                              title="Line Chart"></i></div>
                            <div class="col-md-1" onclick="getlineareachart()"><i class="fa fa-line-chart fa-2x"
                                                                                  aria-hidden="true"
                                                                                  title="Line Area Chart"></i>
                            </div>
                            <div class="col-md-1" onclick="donate()"><i class="fa fa-pie-chart fa-2x"
                                                                        aria-hidden="true"
                                                                        title="Donut Chart"></i></div>
                        </div>
                        <br><br>
                        <h4 class="card-title">Per Month Basis Regitstration</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                <li><a data-action="close"><i class="ft-x"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body chartjs">
                            <div class="height-500">
                                <canvas id="area-chart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" id="lineareachart" style="display:none;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row ">

                            <div class="col-md-1" onclick="getlinechart()"><i class="fa fa-area-chart fa-2x"
                                                                              aria-hidden="true"
                                                                              title="Line Chart"></i></div>
                            <div class="col-md-1" onclick="getlineareachart()"><i class="fa fa-line-chart fa-2x"
                                                                                  aria-hidden="true"
                                                                                  title="Line Area Chart"></i>
                            </div>
                            <div class="col-md-1" onclick="donate()"><i class="fa fa-pie-chart fa-2x"
                                                                        aria-hidden="true"
                                                                        title="Donut Chart"></i></div>
                        </div>
                        <br><br>
                        <h4 class="card-title">Per Month Basis Regitstration</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                <li><a data-action="close"><i class="ft-x"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body chartjs">
                            <div class="height-500">
                                <canvas id="line-chart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row match-height" id="donate" style="display:none;">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row ">

                                <div class="col-md-1" onclick="getlinechart()"><i class="fa fa-area-chart fa-2x"
                                                                                  aria-hidden="true"
                                                                                  title="Line Chart"></i></div>
                                <div class="col-md-1" onclick="getlineareachart()"><i
                                        class="fa fa-line-chart fa-2x" aria-hidden="true"
                                        title="Line Area Chart"></i></div>
                                <div class="col-md-1" onclick="donate()"><i class="fa fa-pie-chart fa-2x"
                                                                            aria-hidden="true"
                                                                            title="Donut Chart"></i></div>
                            </div>
                            <br><br>
                            <h4 class="card-title">Overall Registrations</h4>
                            <a class="heading-elements-toggle"><i
                                    class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body">
                                <div class="height-400">
                                    <canvas id="simple-doughnut-chart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
