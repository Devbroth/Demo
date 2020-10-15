@if(auth()->user())
 @extends('dashboard')
 @section('containt')           
  <!-- <div class="breadcrumbbar">
                <div class="row align-items-center">
                    <div class="col-md-8 col-lg-8">
                        <h4 class="page-title">Apex</h4>
                        <div class="breadcrumb-list">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Charts</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Apex</li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="widgetbar">
                            <button class="btn btn-primary"><i class="ri-refresh-line mr-2"></i>Refresh</button>
                        </div>                        
                    </div>
                </div>          
            </div>   
            <div class="contentbar">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="card-title">Line Chart</h5>
                            </div>
                            <div class="card-body">
                                <div id="apex-line-chart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="card-title">Area Chart</h5>
                            </div>
                            <div class="card-body">
                                <div id="apex-area-chart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="card-title">Line Data Chart</h5>
                            </div>
                            <div class="card-body">
                                <div id="apex-line-data-chart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="card-title">Line Gradient Chart</h5>
                            </div>
                            <div class="card-body">
                                <div id="apex-line-gradient-chart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="card-title">Mixed Line Chart</h5>
                            </div>
                            <div class="card-body">
                                <div id="apex-mixed-line-chart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="card-title">Bar Chart</h5>
                            </div>
                            <div class="card-body">
                                <div id="apex-bar-chart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="card-title">Horizontal Bar Chart</h5>
                            </div>
                            <div class="card-body">
                                <div id="apex-horizontal-bar-chart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="card-title">Stacked Bar Chart</h5>
                            </div>
                            <div class="card-body">
                                <div id="apex-stacked-bar-chart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="card-title">Column Chart</h5>
                            </div>
                            <div class="card-body">
                                <div id="apex-column-chart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="card-title">Range Column Chart</h5>
                            </div>
                            <div class="card-body">
                                <div id="apex-range-column-chart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="card-title">Line Column Area Chart</h5>
                            </div>
                            <div class="card-body">
                                <div id="apex-line-column-area-chart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="card-title">Candle Stick Chart</h5>
                            </div>
                            <div class="card-body">
                                <div id="apex-candlestick-chart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="card-title">Pie Chart</h5>
                            </div>
                            <div class="card-body">
                                <div id="apex-pie-chart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="card-title">Radial Chart</h5>
                            </div>
                            <div class="card-body">
                                <div id="apex-radial-chart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="card-title">Stroked Circle Guage</h5>
                            </div>
                            <div class="card-body">
                                <div id="apex-stroked-circle-guage-chart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="card-title">Circle Chart Custom Angel</h5>
                            </div>
                            <div class="card-body">
                                <div id="apex-circle-chart-custom-angel-chart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="card-title">Donut Chart</h5>
                            </div>
                            <div class="card-body">
                                <div id="apex-donut-chart"></div>
                            </div>
                        </div>
                    </div>                   
                </div>
            </div>
            <div class="footerbar">
                <footer class="footer">
                    <p class="mb-0">© 2020 Olian - All Rights Reserved.</p>
                </footer>
            </div>
        </div> -->
            
         @endsection
         @endif