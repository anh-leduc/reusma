<div class="row clearfix">
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="widget">
            <div class="widget-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="state">
                        <h6>@lang('language.New Employee')</h6>
                        <h2>{{$newEmp['number']}}</h2>
                    </div>
                    <div class="icon">
                        <i class="ik ik-user"></i>
                    </div>
                </div>
                <small class="text-small mt-10 d-block">{{abs($newEmp['percent'])}}% {{$newEmp['state']}} than last month</small>
            </div>
            <div class="progress progress-sm">
                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="100"
                    aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="widget">
            <div class="widget-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="state">
                        <h6>@lang('language.Total Employee')</h6>
                        <h2>{{$totalEmp['number']}}</h2>
                    </div>
                    <div class="icon">
                        <i class="ik ik-users"></i>
                    </div>
                </div>
                <small class="text-small mt-10 d-block">{{abs($totalEmp['percent'])}}% {{$totalEmp['state']}} than last month</small>
            </div>
            <div class="progress progress-sm">
                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100"
                    aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="widget">
            <div class="widget-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="state">
                        <h6>@lang('language.Projects')</h6>
                        <h2>{{$project}}</h2>
                    </div>
                    <div class="icon">
                        <i class="ik ik-package"></i>
                    </div>
                </div>
                <small class="text-small mt-10 d-block">@lang('language.Recent Projects')</small>
            </div>
            <div class="progress progress-sm">
                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="100"
                    aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="widget">
            <div class="widget-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="state">
                        <h6>@lang('language.Clients')</h6>
                        <h2>{{$client}}</h2>
                    </div>
                    <div class="icon">
                        <i class="ik ik-dollar-sign"></i>
                    </div>
                </div>
                <small class="text-small mt-10 d-block">@lang('language.Total Clients')</small>
            </div>
            <div class="progress progress-sm">
                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="100"
                    aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
            </div>
        </div>
    </div>
</div>