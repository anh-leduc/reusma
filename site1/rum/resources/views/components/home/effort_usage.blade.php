<div class="col-md-12">
    <div class="card">
        <div class="card-header d-block"><h3>Resource Usage</h3></div>
        <div class="card-body">
            <div class="">
            <table id="data_table" class="table dt-responsive table-striped table-bordered nowrap effort-usage-table" style="width:100%">
                <thead>
                    <tr>
                            <th>@lang('language.Emp Code')</th>
                            <th>@lang('language.Emp Name')</th>
                            @foreach($mondays as $monday)
                            <th>{{$monday}}</th>
                            @endforeach
                    </tr>
                </thead>
                <tbody>                     
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>

