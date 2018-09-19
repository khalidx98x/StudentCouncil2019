
@extends('base_layout._layout')


@section('body')

    <div class="col-md-8">
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet light portlet-fit portlet-form bordered ">


            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-settings font-red"></i>
                    <span class="caption-subject font-red sbold uppercase">@lang('lang.create admin')</span>
                </div>



            </div>
            <div class="portlet-body">
                <!-- BEGIN FORM-->
                <form action="{{route('admins.store')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                    {{csrf_field()}}


                        <div class="form-group" style="text-align:center">
                            {{--<div class="col-md-9">--}}
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-preview thumbnail" data-trigger="fileinput"
                                     style="width: 200px; height: 150px;">

                                </div>
                                <div>
                                                            <span class="btn red btn-outline btn-file">
                                                                <span class="fileinput-new">@lang('lang.select image') </span>
                                                                <span class="fileinput-exists">@lang('lang.change') </span>
                                                                <input type="file" name="admin_image"> </span>
                                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput">@lang('lang.remove') </a>
                                </div>
                                <span class="text-danger">{{$errors->first('admin_image')}}</span>

                            </div>



                        <div class="form-group">
                            <label class="control-label col-md-3">@lang('lang.name')
                            </label>
                            <div class="col-md-4">
                                <input type="text" name="name" data-required="1" class="form-control" value="{{old('name')}}"/>
                                <span class="text-danger">{{$errors->first('name')}}</span>

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">@lang('lang.email')
                            </label>
                            <div class="col-md-4">
                                <input name="email" type="text" class="form-control" value="{{old('email')}}"/>
                                <span class="text-danger">{{$errors->first('email')}}</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">@lang('lang.username')
                            </label>
                            <div class="col-md-4">
                                <input name="username" type="text" class="form-control" value="{{old('username')}}"/>
                                <span class="text-danger">{{$errors->first('username')}}</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">@lang('lang.password')
                            </label>
                            <div class="col-md-4">
                                <input name="password" type="password" class="form-control" value="{{old('password')}}"/>
                                <span class="text-danger">{{$errors->first('password')}}</span>
                            </div>
                        </div>

                            <div class="form-group">
                            <label class="control-label col-md-3">@lang('lang.contact')
                            </label>
                            <div class="col-md-4">
                                <input name="contact_information" type="text" class="form-control" value="{{old('contact_information')}}"/>
                                <span class="text-danger">{{$errors->first('contact_information')}}</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">@lang('lang.type')

                            </label>
                            <div class="col-md-4">
                                <select class="form-control" name="type">
                                    <option value="" disabled>@lang('lang.type')</option>
                                    <option value="1" {{old('type') == '1' ?'selected' :''}}>@lang('lang.super admin')</option>
                                    <option value="2" {{old('type') == '2' ?'selected' :''}}>@lang('lang.sub admin')</option>
                                    <option value="3" {{old('type') == '3' ?'selected' :''}}>@lang('lang.admin')</option>
                                </select>
                                <span class="text-danger">{{$errors->first('type')}}</span>

                            </div>
                        </div>

                        <div class="form-group" style="margin-left:165px">
                                <div class="col-md-8">
                                <textarea placeholder="@lang('lang.description')"
                                          name="description" class="form-control" rows="5" cols="8">{{old('description')}}</textarea>
                                    <span class="text-danger">{{$errors->first('description')}}</span>

                                </div>
                        </div>

                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn green">@lang('lang.submit')</button>
                                <button type="reset" class="btn grey-salsa btn-outline">@lang('lang.cancel')</button>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- END FORM-->
            </div>
        </div>
        <!-- END VALIDATION STATES-->
    </div>


@endsection()
