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
                <th class="nosort">@lang('language.Emp Code')</th>
                <th>@lang('language.Level')</th>
                <th>@lang('language.Full Name')</th>
                <th>@lang('language.Resource Usage')</th>
                <th>@lang('language.Status')</th>
                <th>@lang('language.Action')</th>
            </tr>
        </thead>
        <tbody>
            @foreach($employee as $e)
            <tr class="clickable-row">
                {{-- <td>
                    <label class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
                        <span class="custom-control-label">&nbsp;</span>
                    </label>
                </td> --}}
                <td>{{$e->id_user}}</td>
                <td>{{$e->level}}</td>
                <td>{{$e->name}}</td>
                <td>{{$e->resource+0}}</td>

                <td><label 
                @if($e->status=='Active') class="badge badge-success"
                @elseif($e->status=='Disable' ) class="badge badge-secondary"
                @else($e->status=='Pending') class="badge badge-info"
                @endif
                >
                    {{$e->status}}
                </label></td>
                <td>
                    <a href="employee/{{$e->id_user}}"><i class="ik ik-edit f-16 mr-15 text-green"></i></a>
                    <a href="#!"><i class="ik ik-trash-2 f-16 text-red"></i></a>
                </td>
            </tr>
            @endforeach
        
        </tbody>
    </table>
</div>