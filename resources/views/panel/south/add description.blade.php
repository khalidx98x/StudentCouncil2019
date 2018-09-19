@extends('base_layout._layout')

@section('body')
    <div class="col-md-8">
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet light portlet-fit portlet-form bordered ">


            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-settings font-red"></i>
                    <span class="caption-subject font-red sbold uppercase">@lang('lang.create activity')</span>
                </div>



            </div>
            <div class="portlet-body">
                <!-- BEGIN FORM-->
                <form action="{{route('south.store',['id'=>'1'])}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                    {{csrf_field()}}

                        <div class="form-group" style="margin-left:165px">
                            <div class="col-md-8">
                                <textarea placeholder="@lang('lang.Description')"
                                          name="body" class="form-control" rows="5" cols="8">{{old('body')}}</textarea>
                                <span class="text-danger">{{$errors->first('body')}}</span>

                            </div>

                        </div>

                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn green">@lang('lang.Submit')</button>
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