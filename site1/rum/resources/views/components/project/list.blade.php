<div class="card-body table-responsive">
    <table id="advanced_table" class="table table-hover">
        <thead>
            <tr>
                {{-- <th class="nosort" width="10">
                    <label class="custom-control custom-checkbox m-0">
                        <input type="checkbox" class="custom-control-input" id="selectall" name="" value="option2">
                        <span class="custom-control-label">&nbsp;</span>
                    </label>
                </th> --}}
                <th class="nosort">@lang('language.Project ID')</th>
                <th>@lang('language.Project Name')</th>
                <th>@lang('language.PM')</th>
                <th>@lang('language.Total Effort')</th>
                <th>@lang('language.Client')</th>
                <th>@lang('language.Status')</th>
                <th>@lang('language.Action')</th>
            </tr>
        </thead>
        <tbody>
            @foreach($project as $p)
            <tr class="clickable-row">
                {{-- <td>
                    <label class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
                        <span class="custom-control-label">&nbsp;</span>
                    </label>
                </td> --}}
                <td>{{$p->id_project}}</td>
                <td>{{$p->name_project}}</td>
                <td>{{$p->name_pm}}</td>
                <td>{{$p->total_effort}}</td>
                <td>{{$p->client}}</td>
                
                <td><label @if($p->status=='Active') class="badge badge-success" 
                    @elseif($p->status=='Closed') class="badge badge-secondary" 
                    @else class="badge badge-info"
                    @endif >{{$p->status}}</label>
                </td>
                <td>
                    <a href="project/{{$p->id_project}}"><i class="ik ik-edit f-16 mr-15 text-green"></i></a>
                    <a href="" data-id="{{$p->id_project}}" class="btn_delete"><i class="ik ik-trash-2 f-16 text-red" ></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>