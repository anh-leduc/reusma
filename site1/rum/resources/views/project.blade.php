@extends('layouts.app')
@section('content')
<div class="main-content">

    <div class="container-fluid">
        <div class="card">
            <div class="card-header row">
                <div class="col col-sm-3">
                    <div class="card-options d-inline-block">
                        <button type="button" class="btn btn-icon btn-success" data-target="#exampleModalLong" data-toggle="modal"><i class="ik ik-plus"></i></button>
                    </div>
                </div>
                <div class="col col-sm-6">
                    <div class="card-search with-adv-search dropdown">
                        <form action="">
                            <input type="text" class="form-control global_filter" id="global_filter" placeholder="@lang('language.Search').." required>
                            <button type="submit" class="btn btn-icon"><i class="ik ik-search"></i></button>
                            <button type="button" id="adv_wrap_toggler" class="adv-btn ik ik-chevron-down dropdown-toggle" data-toggle="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                            <div class="adv-search-wrap dropdown-menu dropdown-menu-right" aria-labelledby="adv_wrap_toggler">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control column_filter" id="col1_filter" placeholder="@lang('language.Project Name')" data-column="1">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control column_filter" id="col2_filter" placeholder="@lang('language.Project Manager')" data-column="2">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control column_filter" id="col4_filter" placeholder="@lang('language.Client')" data-column="4">
                                        </div>
                                    </div>
                                    <div class="col-md-12 checkbox" style="padding-top:2%">
                                        <label style="padding-left:3%;padding-right:3%"><input type="checkbox" class="checkbox_filter" value="New" >&nbsp; New</label>
                                        <label style="padding-left:3%;padding-right:3%"><input type="checkbox" class="checkbox_filter" value="Pre-sale" >&nbsp; Pre-sale</label>
                                        <label style="padding-left:3%;padding-right:3%"><input type="checkbox" class="checkbox_filter" value="Active"  >&nbsp; Active</label>
                                        <label style="padding-left:3%;padding-right:3%"><input type="checkbox" class="checkbox_filter" value="Pending" >&nbsp; Pending</label>
                                        <label style="padding-left:3%;padding-right:3%"><input type="checkbox" class="checkbox_filter" value="Reject" >&nbsp; Reject</label>
                                        <label style="padding-left:3%;padding-right:3%"><input type="checkbox" class="checkbox_filter" value="Closed" >&nbsp; Closed</label>
                                    </div>
                                </div>
                                
                                <button class="btn btn-theme">@lang('language.Search')</button>
                                <input type="button" class="btn float-right btn-theme" style="width:90px !important" id="btn_clear_search" value="@lang('language.Clear')">
                            </div>
                        </form>
                    </div>

                </div>
                {{-- <div class="col col-sm-3">
                    <div class="card-options text-right">
                        <span class="mr-5" id="top">1 - 50 of 2,500</span>
                        <a href="#"><i class="ik ik-chevron-left"></i></a>
                        <a href="#"><i class="ik ik-chevron-right"></i></a>
                    </div>
                </div> --}}
            </div>
            @include('components.project.list')
        </div>
        @include('components.project.add')
    </div>
</div>

@endsection