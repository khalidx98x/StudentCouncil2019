@extends('base_layout._layout')
@section('style')
    <style>

        .portlet.box.red{
            border: none;
        }

    </style>
 @endsection
@section('body')

    <div class="col-md-8">
        @if(session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
        @elseif(session('error'))
            <div class="alert alert-danger">
                {{session('error')}}
            </div>
        @endif
        <div class="portlet box red">

        </div>


        <div class="portlet box red">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-cogs"></i>@lang('lang.title')
                </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse"> </a>
                    <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                    <a href="javascript:;" class="reload"> </a>
                    <a href="javascript:;" class="remove"> </a>
                </div>
            </div>
            <div class="portlet-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>@lang('lang.image')</th>
                            <th>@lang('lang.image_name')</th>

                            <th style="text-align: center">@lang('lang.options')</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($sliders as $slider)
                            <tr>
                                <td><img class="img-responsive img-south"  style="max-width: 100px" src="{{$slider->getImage()}}"></td>
                                <td>{{$slider->image_name}}</td>

                                <td style="text-align: center">
                                    <a class="btn btn-danger delete-image"
                                       data-image-id="{{$slider->id}}"

                                            {{--href="{{route('admins.destroy',['id'=>$admin->id])}}"--}}
                                    >
                                        <i class="fa fa-trash"></i>
                                    </a>
                                    {{--<a href="{{route('south.edit',['id'=>$slider->id])}}" class="btn btn-primary">--}}
                                        {{--<i class="fa fa-edit"></i>--}}
                                    {{--</a>--}}
                                </td>

                            </tr>
                @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection


@section('script')
    <script>

        $('.delete-image').click(function () {

            var id = $(this).data('image-id');
            swal({
                    title: "Are you sure?",
                    text: "Do you want to delete ?",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "btn-danger",
                    confirmButtonText: "Yes, delete it!",
                    closeOnConfirm: false
                },
                function () {
                    window.location = '{{route('image.destroy')}}/' + id;
                });


        })


    </script>




@endsection