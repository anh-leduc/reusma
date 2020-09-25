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
                                            <input type="text" class="form-control column_filter" id="col2_filter" placeholder="@lang('language.Emp Fullname')" data-column="2">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control column_filter" id="col0_filter" placeholder="@lang('language.Emp Code')" data-column="0">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control column_filter" id="col1_filter" placeholder="@lang('language.Emp Level')" data-column="1">
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-theme">@lang('language.Search')</button>
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
            @include('components.employee.list')
        </div>
        @include('components.employee.add')
    </div>
</div>
@endsection
