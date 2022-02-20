@extends('dashboard.partials.layout')

@section('dashboard.content-view')
    <div class="row">
        <div class="col-4">
            <div class="card pull-up bg-gradient-directional-danger">
                <div class="card-header ">
                    <h4 class="card-title white">Branch</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li>
                                <a class="btn btn-sm btn-white danger box-shadow-1 round btn-min-width pull-right"
                                   href="#"
                                   target="_blank">Report <i class="ft-bar-chart pl-1"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show ">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="align-self-center width-100">
                                <div id="Analytics-donut-chart" class="height-100 donutShadow"></div>
                            </div>
                            <div class="media-body text-right mt-1">
                                <h3 class="font-large-2 white">20</h3>
                                <!-- <h6 class="mt-1"><span class="text-muted white">Analytics in the <a href="#" class="darken-2 white">last year.</a></span></h6> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card pull-up bg-gradient-directional-success">
                <div class="card-header bg-hexagons-primary">
                    <h4 class="card-title white">Company</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li>
                                <a class="btn btn-sm btn-white success box-shadow-1 round btn-min-width pull-right"
                                   href="#"
                                   target="_blank">Report <i class="ft-bar-chart pl-1"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show bg-hexagons-success">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="align-self-center width-100">
                                <div id="Analytics-donut-chart" class="height-100 donutShadow"><i
                                        class="fa fa-building fa-5x" style="color:white;font-size: 7em;"></i></div>
                            </div>
                            <div class="media-body text-right mt-1">
                                <h3 class="font-large-2 white">30</h3>
                                <!-- <h6 class="mt-1"><span class="text-muted white">Analytics in the <a href="#" class="darken-2 white">last year.</a></span></h6> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card pull-up bg-gradient-directional-info">
                <div class="card-header info">
                    <h4 class="card-title white">Employee</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li>
                                <a class="btn btn-sm btn-white info box-shadow-1 round btn-min-width pull-right"
                                   href="#"
                                   target="_blank" style="color:white">Report <i class="ft-bar-chart pl-1"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show ">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="align-self-center width-100">
                                <div id="Analytics-donut-chart" class="height-100 donutShadow"><i
                                        class="fa fa-user fa-5x"
                                        style="color:white;font-size: 7em;"></i>
                                </div>
                            </div>
                            <div class="media-body text-right mt-1">
                                <h3 class="font-large-2 white">50</h3>
                                <!-- <h6 class="mt-1"><span class="text-muted white">Analytics in the <a href="#" class="darken-2 white">last year.</a></span></h6> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Per month basis employee register</h4>
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
                    <div class="card-body">
                        <div class="height-400">
                            <canvas id="column-chart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
