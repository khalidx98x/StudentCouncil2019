@extends('base_layout._layout')

@section('body')

    <div class="row">
        <div class="col-md-12">
            <div class="portlet light bordered">

                <div class="caption font-red-sunglo">
                    <h3> <span class="caption-subject bold uppercase"> @lang('lang.edit department')</span></h3>
                </div><br>
                <form action="{{route('department.update',['id'=>$department->id])}}" method="POST">
                    @csrf
                    {{method_field('PUT')}}

                    <div class="form-group">
                        <label for="name">@lang('lang.department name')</label>
                        <input type="text" class="form-control" name="department_name" value="{{$department->name}}">
                        <span class="text-danger">{{$errors->first('department_name')}}</span>

                    </div>
                    <div class="form-group">
                        <label>@lang('lang.department type')</label>
                        <div class="mt-checkbox-inline">
                            <label class="mt-radio">
                                <input type="radio" name="type" value="0"> @lang('lang.committee')
                                <span></span>
                            </label>
                            <label class="mt-radio">
                                <input type="radio" name="type" value="1"> @lang('lang.club')
                                <span></span>
                            </label>
                        </div>
                        <span class="text-danger">{{$errors->first('type')}}</span>

                    </div>
                    <div class="form-group">
                        <label for="council_names">@lang('lang.department leader')</label>
                        <select name="department_leader" class="form-control">
                            <option value="{{$department->councilMember->id}}">{{$department->councilMember->name}}</option>
                            @foreach($councilMembers as $councilMember)
                                <option value="{{$councilMember->id}}">{{$councilMember->name}}</option>
                            @endforeach
                        </select>

                    </div><hr>
                    <div class="caption font-red-sunglo">
                        <h3> <span class="caption-subject bold uppercase"> @lang('lang.contact information')</span></h3>
                    </div><hr>

                    <div class="form-group">
                        <label for="name">@lang('lang.phone')</label>
                        <input type="text" class="form-control" name="department_phone" value="{{$department->phone}}">
                        <span class="text-danger">{{$errors->first('department_phone')}}</span>

                    </div>


                    <div class="form-group">
                        <label for="name">@lang('lang.email')</label>
                        <input type="text" class="form-control" name="department_email" value="{{$department->email}}">
                        <span class="text-danger">{{$errors->first('department_email')}}</span>

                    </div>

                    <div class="form-group">
                        <label for="name">@lang('lang.facebook')</label>
                        <input type="text" class="form-control" name="department_facebook" {{$department->facebook}}>
                        <span class="text-danger">{{$errors->first('department_facebook')}}</span>

                    </div>

                    <div class="form-group">
                        <label for="name">@lang('lang.twitter')</label>
                        <input type="text" class="form-control" name="department_twitter" {{$department->twitter}}>
                        <span class="text-danger">{{$errors->first('department_twitter')}}</span>

                    </div>

                    <div class="form-group">
                        <label for="name">@lang('lang.instagram')</label>
                        <input type="text" class="form-control" name="department_instagram" value="{{$department->instagram}}">
                        <span class="text-danger">{{$errors->first('department_facebook')}}</span>

                    </div>


                    <div class="action">
                        <input type="submit" value="@lang('lang.submit')" class="btn btn-primary">
                        <input type="reset" value="@lang('lang.cancel')" class="btn btn-default">
                    </div>
                </form>

            </div>

        </div>
    </div>

@endsection