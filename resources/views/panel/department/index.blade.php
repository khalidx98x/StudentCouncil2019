@extends('base_layout._layout')


@section('body')


    @php
        $counter=1;
    @endphp

    <div class="col-md-12">
        <div class="portlet light portlet-fit bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-settings font-red"></i>
                    <span class="caption-subject font-red sbold uppercase">@lang('lang.users')</span>
                </div>

            </div>
            <div class="portlet-body">
                <div class="table-scrollable table-scrollable-borderless">
                    <table class="table table-hover table-light">
                        <thead>
                        <tr class="uppercase">
                            <th> #</th>
                            <th>@lang('lang.department name')</th>
                            <th> @lang('lang.department type')</th>
                            <th> @lang('lang.department leader')</th>
                            <th> @lang('lang.department activities')</th>
                            <th> @lang('lang.department tasks')</th>
                            <th>@lang('lang.contact information')</th>
                            <th style="text-align: center">@lang('lang.options')</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($departments as $department)
                            <tr>
                                <td>{{$counter++}}</td>
                                <td>{{$department->name}}</td>
                                <td>
                                    @if($department->type==0)
                                        @lang('lang.committee')
                                    @else
                                        @lang('lang.club')
                                    @endif
                                </td>
                                <td>{{$department->councilMember->name}}</td>
                                <td><a href="" class="btn btn-default">@lang('lang.show')</a></td>
                                <td><a href="" class="btn btn-default">@lang('lang.show')</a></td>
                                <td></td>

                                <td style="text-align: center">
                                    <a href="{{route('department.edit',['id'=>$department->id])}}" class="btn btn-primary">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a class="btn btn-danger" href="">
                                        <i class="fa fa-trash"></i>
                                    </a>

                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- END BORDERED TABLE PORTLET-->
    </div>


@endsection