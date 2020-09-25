<div class="col-md-4">
    <div class="card" style="min-height: 467px;">
        <div class="card-header">
            <h3>@lang('language.Project Statistics')</h3>
        </div>
        <div class="card-body">    
            <div class="progress mb-30">
                <div class="progress-bar bg-green" style="width:{{$projStatistic["presale"]["percent"]}}%">{{$projStatistic["presale"]["percent"]}}%</div>
                <div class="progress-bar bg-blue" style="width:{{$projStatistic["active"]["percent"]}}%">{{$projStatistic["active"]["percent"]}}%</div>
                <div class="progress-bar bg-danger" style="width:{{$projStatistic["pending"]["percent"]}}%">{{$projStatistic["pending"]["percent"]}}%</div>
                <div class="progress-bar bg-default" style="width:{{$projStatistic["closed"]["percent"]}}%">{{$projStatistic["closed"]["percent"]}}%</div>
            </div>

            <div>
                <p class="text-success">@lang('language.Pre-sales Projects')<span class="float-right">{{$projStatistic["presale"]["num"]}}</span></p>
                <p class="text-info">@lang('language.Active Projects')<span class="float-right">{{$projStatistic["active"]["num"]}}</span></p>
                <p class="text-danger">@lang('language.Pending Projects')<span class="float-right">{{$projStatistic["pending"]["num"]}}</span></p>
                <p class="text-default">@lang('language.Closed Projects')<span class="float-right">{{$projStatistic["closed"]["num"]}}</span></p>
            </div>
            
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    @foreach($projStatistic["client"] as $cl)
                    <div class="row mb-15">
                        <div class="col-9">{{$cl->name}}</div>
                        <div class="col-3 text-right">{{$cl->percent}}%</div>
                        <div class="col-12">
                            <div class="progress progress-sm mt-5">
                                <div class="progress-bar bg-aqua" role="progressbar" style="width: {{$cl->percent}}%" aria-valuenow="{{$cl->percent}}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="row mb-15">
                        <div class="col-9">{{$projStatistic["otherClient"]->name}}</div>
                        <div class="col-3 text-right">{{$projStatistic["otherClient"]->percent}}%</div>
                        <div class="col-12">
                            <div class="progress progress-sm mt-5">
                                <div class="progress-bar bg-aqua" role="progressbar" style="width: {{$projStatistic["otherClient"]->percent}}%" aria-valuenow="{{$projStatistic["otherClient"]->percent}}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>