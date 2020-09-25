<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongLabel">@lang('language.Create New Project')</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form class="forms-sample" action="{{route('add_project')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-9">
                            <div class="form-group">
                                <label for="name">@lang('language.Project Name')</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="@lang('language.Project Name')">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="id">@lang('language.Project ID')</label>
                                <input type="text" class="form-control" name="id" id="id" placeholder="@lang('language.Project ID')">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="start_date">@lang('language.Start Date')</label>
                                <input type="date" class="form-control" name="start_date" id="start_date" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="end_date">@lang('language.End Date')</label>
                                <input type="date" class="form-control" name="end_date" id="end_date">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="required" for="total_effort">@lang('language.Total Effort')</label>
                                <input type="text" class="form-control" name="total_effort" id="total_effort" placeholder="man.month">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleSelectGender">@lang('language.Client')</label>
                                <select class="form-control" id="client" name="id_client">
                                    @foreach($client as $cl)
                                    <option value="{{$cl->id}}">{{$cl->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-9">
                            <div class="form-group">
                                <label>@lang('language.Add Project Manager')</label>
                                <select class="form-control" id="id_pm" name="id_pm" >
                                    @foreach($pm as $p)
                                    <option value="{{$p->id}}">{{$p->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>@lang('language.Status')</label>
                                <select class="form-control" id="status" name="status" >
                                    <option value="New">New</option>
                                    <option value="Pre-sale">Pre-sale</option>
                                    <option value="Active">Active</option>
                                    <option value="Pending">Pending</option>    
                                    <option value="Closed">Closed</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="id_dev">@lang('language.Add Member')</label>
                                <select class="form-control select2" style="width:100%" id="id_dev" name="id_dev[]" multiple="multiple">
                                    @foreach($dev as $d)
                                    <option value="{{$d->id}}">{{$d->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('language.Close')</button>
                        <button type="submit" id="btn_submit" class="btn btn-primary">@lang('language.Submit')</button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>