@extends('base_layout._layout')

@section('body')


    <div class="col-md-8" >
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet light portlet-fit portlet-form bordered ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-settings font-red"></i>
                    <span class="caption-subject font-red sbold uppercase">@lang('lang.addCollege')</span>
                </div>

            </div>
            <div class="portlet-body">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{session('success')}}
                    </div>
                @elseif(session('error'))
                    <div class="alert alert-danger">
                        {{session('error')}}
                    </div>
            @endif
            <!-- BEGIN FORM-->
                <form action="{{route('colleges.add')}}" id="form_sample_1"  class="form-horizontal" method="POST">
                    {{csrf_field()}}
                    <div class="form-body">

                        <div class="form-group">
                            <label class="control-label col-md-3">@lang('lang.college Name')
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-4">
                                <input type="text" name="name" class="form-control">
                                <span class="error">{{$errors->first('name')}}</span>

                            </div>
                        </div>
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                    <button type="submit" name="store" class="btn green">@lang('lang.Submit')</button>
                                    <button type="reset" class="btn grey-salsa btn-outline">@lang('lang.Cancel')</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- END FORM-->
            </div>
        </div>
    </div>


@endsection