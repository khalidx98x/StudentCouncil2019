@extends('base_layout._layout')


@section('body')
    <div class="col-md-8">

        <div class="portlet box blue-chambray">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-search"></i> @lang('lang.Search')
                </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse"> </a>
                    <a href="javascript:;" class="reload"> </a>
                    <a href="javascript:;" class="remove"> </a>
                </div>
            </div>
            <div class="portlet-body">
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{route('admins.index')}}" method="GET">
                            <div class=" col-sm-4 form-group">
                                <label for="email">@lang('lang.Email')</label>
                                <input type="text" class="form-control" name="email">
                            </div>

                            <div class=" col-sm-4 form-group">
                                <label for="username">@lang('lang.Username')</label>
                                <input type="text" class="form-control" name="username">
                            </div>


                            <div class="form-action col-sm-12 text-right">
                                <input type="submit" class="btn btn-primary" value=@lang('lang.Search')>
                                <a href="{{route('admins.index')}}" class="btn btn-default">
                                    @lang('lang.Cancel')
                                </a>
                            </div>

                        </form>

                    </div>

                </div>

            </div>
        </div>


        <div class="portlet box blue-chambray">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-cogs"></i>@lang('lang.title')
                </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse"> </a>
                    <a href="javascript:;" class="reload"> </a>
                    <a href="javascript:;" class="remove"> </a>
                </div>
            </div>
            <div class="portlet-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>@lang('lang.name')</th>
                            <th> @lang('lang.email')</th>
                            <th> @lang('lang.username')</th>
                            <th> @lang('lang.description')</th>
                            <th> @lang('lang.type')</th>
                            <th style="text-align: center">@lang('lang.options')</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($admins as $admin)
                            <tr>
                                <td>{{$admin->name}}</td>
                                <td>{{$admin->email}}</td>
                                <td>{{$admin->username}}</td>
                                <td>{{str_limit($admin->description,5)}}</td>
                                <td>{{$admins->type == '1' ? :'super admin'}}
                                    {{$admins->type == '2' ? :'sub admin'}}
                                    {{$admins->type == '3' ? :'admin'}}
                                </td>
                                <td style="text-align: center">
                                    <a class="btn btn-danger delete-admin"
                                       data-admin-id="{{$admin->id}}"
                                       data-admin-name="{{$admin->name}}"
                                        {{--href="{{route('admins.destroy',['id'=>$admin->id])}}"--}}
                                    >
                                        <i class="fa fa-trash"></i>
                                    </a>
                                    <a href="{{route('admins.edit',['id'=>$admin->id])}}" class="btn btn-primary">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                </td>

                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                    <div class="col-md-12 text-right">
                        {{$admins->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection



@section('script')
    <script>

        $('.delete-admin').click(function () {
            var name = $(this).data('admin-name');
            var id = $(this).data('admin-id');
            swal({
                    title: "Are you sure?",
                    text: "Do you want to delete" + name + " ?",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "btn-danger",
                    confirmButtonText: "Yes, delete it!",
                    closeOnConfirm: false
                },
                function () {
                    window.location = '{{route('admins.destroy')}}/' + id;
                });


        })


    </script>




@endsection
