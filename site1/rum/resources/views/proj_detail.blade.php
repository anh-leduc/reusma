@extends('layouts.app')
@section('content')
<div class="page-wrap">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>@lang('language.Project Information')</h3>
                        </div>
                        <div class="card-body">
                            <form class="forms-sample">
                                <div class="form-group row">
                                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">@lang('language.Project ID')</label>
                                    <label class="col-sm-8 col-form-label">
                                    {{$project->id}}
                                    </label>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">@lang('language.Project Name')</label>
                                    <div class="col-sm-9">
                                        <lable>{{$project->name}}</lable>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">@lang('language.Start Date')</label>
                                    <div class="col-sm-9">
                                        <lable>{{$project->start_date->format('m-d-Y')}}</lable>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">@lang('language.End Date')</label>
                                    <div class="col-sm-9">
                                        <lable>{{$project->end_date->format('m-d-Y')}}</lable>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">@lang('language.Total Effort')</label>
                                    <div class="col-sm-9">
                                        <lable>{{$project->total_effort/160}}  man.month</lable>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">@lang('language.Client')</label>
                                    <div class="col-sm-9">
                                        <lable>{{$client->name}}</lable>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">@lang('language.Status')</label>
                                    <div class="col-sm-9">
                                        <lable>{{$project->status}}</lable>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">@lang('language.Project Manager')</label>
                                    <div class="col-sm-9">
                                        <lable>{{$proj_manage->name}}</lable>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">@lang('language.Project Member')</label>
                                    <div class="col-sm-9">
                                        <lable>
                                            @foreach($proj_member_unique as $member)
                                                @if ($loop->last)
                                                    {{$member}}
                                                @else
                                                {{$member}},
                                                @endif    
                                            @endforeach
                                        </lable>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary mr-2" data-target="#exampleModalLong"
                                    data-toggle="modal">@lang('language.Edit')</button>
                            </form>

                            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLongLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongLabel">@lang('language.Edit Project')</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">×</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="forms-sample" method="post">
                                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <div class="form-group">
                                                            <label for="project-name">@lang('language.Project Name')</label>
                                                            <input type="text" class="form-control" id="@lang('language.project-name')"
                                                                name="project-name" placeholder="@lang('language.Project Name')"
                                                                value="{{$project->name}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="project-id">@lang('language.Project ID')</label>
                                                            <input type="text" class="form-control" id="project-id"
                                                                placeholder="@lang('language.Project ID')" value="{{$project->id}}"
                                                                disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="start-date">@lang('language.Start Date')</label>
                                                            <input type="date" class="form-control" id="start-date"
                                                                name="start-date"
                                                                value="{{$project->start_date->format('Y-m-d')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="end-date">@lang('language.End Date')</label>
                                                            <input type="date" class="form-control" id="end-date"
                                                                name="end-date"
                                                                value="{{$project->end_date->format('Y-m-d')}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="required" for="total-effort">@lang('language.Total Effort')</label>
                                                            <input type="text" class="form-control" id="total-effort"
                                                                name="total-effort" placeholder="man.month"
                                                                value="{{$project->total_effort/160}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="client" style="display:block;">@lang('language.Client')</label>
                                                            <select id="client" name="client" class="form-control list">
                                                                <option id="" selected="selected">{{$client->name}}
                                                                </option>
                                                                @foreach($clientlist as $d)
                                                                @if ($d->name!==$client->name)
                                                                <option value="{{$d->name}}">{{$d->name}}</option>
                                                                @endif
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="form-group">
                                                            <label for="proj-manage">@lang('language.Project Manager'):</label>
                                                            <select id="proj-manage" name="proj-manage"
                                                                class="form-control list">
                                                                <option id="" selected="selected">{{$proj_manage->name}}
                                                                </option>
                                                                @foreach($users as $d)
                                                                @if ($d->name!==$proj_manage->name)
                                                                <option value="{{$d->name}}">{{$d->name}}</option>
                                                                @endif
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="status">@lang('language.Status'):</label>
                                                            <select class="form-control" id="status" name="status">
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
                                                            <label for="proj_member_type_b">@lang('language.Project Member') - @lang('language.Type') B:</label>
                                                            <select id="proj_member_type_b" name="proj_member_type_b[]"
                                                                class="form-control" multiple="multiple">
                                                                @foreach($users as $d)
                                                                    <option value="{{$d->id}}">{{$d->name}}</option>
                                                                @endforeach
                                                            </select>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="proj_member_type_s">@lang('language.Project Member') - @lang('language.Type') S:</label>
                                                            <select id="proj_member_type_s" name="proj_member_type_s[]"
                                                                class="form-control" multiple="multiple">
                                                                @foreach($users as $d)
                                                                    <option value="{{$d->id}}">{{$d->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="proj_member_type_n">@lang('language.Project Member') - @lang('language.Type') N:</label>
                                                            <select id="proj_member_type_n" name="proj_member_type_n[]"
                                                                class="form-control" multiple="multiple">
                                                                @foreach($users as $d)
                                                                    <option value="{{$d->id}}">{{$d->name}}</option>
                                                                @endforeach
                                                            </select>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">@lang('language.Close')</button>
                                                    <button type="submit" class="btn btn-primary">@lang('language.Submit')</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">   
                <div class="col-md-12">
                    <div class="card">
                    <div class="card-header">
                            <h3>@lang('language.Project Effort')</h3>
                        </div>
                    <div style="padding-left: 5%; float:right;">
                        <span style="font-size:15px; margin-right:2%;">Commitment: {{$project->total_effort/8}}</span>
                        <span style="font-size:15px; margin-right:2%;">Assigned: {{$assigned}}</span>
                        <span style="font-size:15px; margin-right:2%;">Billable: {{$billable}}</span>
                        <span style="font-size:15px; margin-right:10%;">Unit: man.day</span>
                    </div>
                    <div class="card-body">
                        <div id="spreadsheet" class=""></div>
                        <button type="submit" class="btn btn-primary" id="projEffortBtn">@lang('language.Submit')</button>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection