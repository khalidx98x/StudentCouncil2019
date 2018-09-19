@extends('base_layout._layout')

@section('body')

    <div class="col-md-8" >
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet light portlet-fit portlet-form bordered ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-settings font-red"></i>
                    <span class="caption-subject font-red sbold uppercase">@lang('lang.uploadImage')</span>
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
                <form action="{{route('slider.upload')}}" id="form_sample_1" enctype="multipart/form-data" class="form-horizontal" method="POST">
                    {{csrf_field()}}
                    <div class="form-body">

                        {{--image div--}}
                        <label class="control-label col-md-3"></label>
                        <div class="col-md-9" >
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"> </div>
                                <div style="text-align: center">
                               <span class="btn red btn-outline btn-file">
                                <span class="fileinput-new" > @lang('lang.Select image') </span>
                               <span class="fileinput-exists"> @lang('lang.Change') </span>
                               <input type="file" name="uploaded_image"> </span>
                                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput">
                                        @lang('lang.Remove') </a>
                                    <span class="error">{{$errors->first('uploaded_image')}}</span>
                                </div>
                            </div>
                        </div>
                        {{--end image div--}}

                        <div class="form-group">
                            <label class="control-label col-md-3">@lang('lang.ImageName')
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-4">
                                <input type="text" name="image_name" class="form-control">
                                <span class="error">{{$errors->first('image_name')}}</span>

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
        <!-- END VALIDATION STATES-->
    </div>


@endsection