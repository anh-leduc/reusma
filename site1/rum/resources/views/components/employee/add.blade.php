<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongLabel">@lang('language.Create New Employee')</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form class="forms-employee" action="{{route('add_employee')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-9">
                            <div class="form-group">
                                <label for="name">@lang('language.Full Name')</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="@lang('language.Full Name')">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="id">@lang('language.Emp Code')</label>
                                <input type="text" class="form-control" id="id" name="id" placeholder="@lang('language.Emp Code')">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="fullname">@lang('language.User name')</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="@lang('language.Username')">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="password">@lang('language.Password')</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="@lang('language.Password')">
                            </div>
                        </div>
                    </div>     
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="exampleSelectGender">@lang('language.Status')</label>
                                <select class="form-control" id="status" name="status">
                                    <option value="Active">Active</option>
                                    <option value="Pending">Pending</option>
                                    <option value="Disable">Disable</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleSelectGender">@lang('language.Level')</label>
                                <select class="form-control" id="id_level" name="id_level">
                                    @foreach($level as $l)
                                        <option value="{{$l->id}}">{{$l->level}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleSelectGender">@lang('language.Gender')</label>
                                <select class="form-control" id="gender" name="gender">
                                    <option value="Male">@lang('language.Male')</option>
                                    <option value="Female">@lang('language.Female')</option>
                                    <option value="Other">@lang('language.Other')</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="exampleSelectGender">@lang('language.Role')</label>
                                <select class="form-control" id="privillege" name="privillege">
                                    <option value="1">Admin</option>
                                    <option value="2">PM</option>
                                    <option value="3">Dev</option>
                                    <option value="0">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleSelectGender">@lang('language.Start Date')</label>
                                <input type="date" class="form-control" name="join_date">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('language.Close')</button>
                        <button type="submit" class="btn btn-primary">@lang('language.Submit')</button>
                    </div>                     
                </form>
            </div>
        </div>
    </div>
</div>