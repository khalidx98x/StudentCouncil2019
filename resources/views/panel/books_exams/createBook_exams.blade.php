@extends('base_layout._layout')

@section('body')
    <div class="col-md-8">
        <div class="portlet light portlet-fit portlet-form bordered ">


            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-settings font-red"></i>
                    <span class="caption-subject font-red sbold uppercase">@lang('lang.CreateBook_exam')</span>
                </div>



            </div>
            @if(session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
            @elseif(session('error'))
                <div class="alert alert-danger">
                    {{session('error')}}
                </div>
            @endif
            <div class="portlet-body">
                <!-- BEGIN FORM-->
                <form action="{{route('book.create')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                    {{csrf_field()}}

                    <div class="form-group" style="text-align:center">
                        {{--<div class="col-md-9">--}}
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-preview thumbnail" data-trigger="fileinput"
                                 style="width: 200px; height: 150px;">
                            </div>
                            <div>
                             <span class="btn red btn-outline btn-file">
                            <span class="fileinput-new"> Select image </span>
                                                                <span class="fileinput-exists"> Change </span>
                                                                <input type="file" name="book_image"> </span>
                                <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                            </div>
                            <span class="text-danger">{{$errors->first('book_image')}}</span>

                        </div>


                        <div class="form-group" style="margin-left: 50px;">
                            <label class="control-label col-md-3">@lang('lang.linkDownload')<span class="required">*</span>
                            </label>
                            <div class="col-md-4">
                                <input type="text" name="url" data-required="1" class="form-control" value="{{old('url')}}"/>
                                <span class="text-danger">{{$errors->first('url')}}</span>

                            </div>
                        </div>

                        <div class="form-group" style="margin-left: 50px;">
                            <label class="control-label col-md-3">@lang('lang.bookType')<span class="required">*</span>
                            </label>
                            <div class="col-md-4">
                                <select class="form-control" name="type_book">
                                    <option value="">Select Book Type </option>
                                    <option value="1" {{old('type_book') == '1' ?'selected' :'متطلب'}}>متطلب</option>
                                    <option value="0" {{old('type_book') == '0' ?'selected' :'جامعة'}}>جامعة</option>
                                </select>
                                <span class="text-danger">{{$errors->first('type_book')}}</span>

                            </div>
                        </div>

                        <div class="form-group" style="margin-left: 50px;">
                            <label class="control-label col-md-3">@lang('lang.collegeName')<span class="required">*</span>
                            </label>
                            <div class="col-md-4">
                                <select class="form-control" name="college_name">
                                    <option value="">Select College Name </option>
                                    <option value="1" {{old('college_name') == '1' ?'selected' :'IT'}}>IT</option>
                                    <option value="0" {{old('college_name') == '0' ?'selected' :'eng'}}>eng</option>
                                </select>
                                <span class="text-danger">{{$errors->first('college_name')}}</span>

                            </div>
                        </div>

                        <div class="form-group" style="margin-left: 50px;">
                            <label class="control-label col-md-3">@lang('lang.selectType')<span class="required">*</span>
                            </label>
                            <div class="col-md-4">
                                <select class="form-control" name="type_Requirement_or_colleges">
                                    <option value="">Select type </option>
                                    <option value="1" {{old('type_Requirement_or_colleges') == '1' ?'selected' :'كتاب'}}>كتاب</option>
                                    <option value="0" {{old('type_Requirement_or_colleges') == '0' ?'selected' :'اختبار'}}>اختبار</option>
                                </select>
                                <span class="text-danger">{{$errors->first('type_Requirement_or_colleges')}}</span>

                            </div>
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
                </form>
                <!-- END FORM-->
            </div>
        </div>
        <!-- END VALIDATION STATES-->
    </div>


@endsection

