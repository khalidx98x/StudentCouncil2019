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
                            <th>@lang('lang.first name')</th>
                            <th> @lang('lang.last name')</th>
                            <th> @lang('lang.email')</th>
                            <th>@lang('lang.created_at')</th>
                            <th style="text-align: center">@lang('lang.options')</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($users as $user)
                            <tr>
                                <td>{{$counter++}}</td>
                                <td>{{$user->first_name}}</td>
                                <td>{{$user->last_name}}</td>

                                <td>{{$user->email}}</td>
                                <td>{{$user->created_at}}</td>

                                <td style="text-align: center">
                                    <a href="{{route('user.edit')}}" class="btn btn-primary">
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