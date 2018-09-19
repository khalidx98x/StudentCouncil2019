@extends('base_layout._layout')

@section('body')

    <div class="row">
        <div class="portlet light  bordered">

                <form action="">

                    <div class="form-group text-center ">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"> </div>
                                <div>
                                                            <span class="btn red btn-outline btn-file">
                                                                <span class="fileinput-new">@lang('lang.select image')</span>
                                                                <span class="fileinput-exists">@lang('lang.change')</span>
                                                                <input type="file" name="..."> </span>
                                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput">@lang('lang.cancel')</a>
                                </div>
                            </div>

                    </div>

                    <div class="form-group">
                        <label for="first_name">@lang('lang.first name')</label>
                        <input type="text" class="form-control" name="first_name">
                    </div>
                    <div class="form-group">
                        <label for="last">@lang('lang.last name')</label>
                        <input type="text" class="form-control" name="last_name">
                    </div>
                    <div class="form-group">
                        <label for="email">@lang('lang.email')</label>
                        <input type="text" class="form-control" name="email">
                    </div>

                    <div class="form-group">
                        <label for="password">@lang('lang.password')</label>
                        <input type="text" class="form-control" name="password">
                    </div>


                    <div class="action">
                        <input type="submit" value="@lang('lang.submit')" class="btn btn-primary">
                        <input type="reset" value="@lang('lang.cancel')" class="btn btn-default">
                    </div>
                </form>


        </div>
    </div>

@endsection