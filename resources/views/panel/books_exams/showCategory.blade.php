@extends('base_layout._layout')

@section('body')

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
                        <th>@lang('lang.url')</th>
                        <th>@lang('lang.college_name')</th>
                        <th>@lang('lang.type_book')</th>
                        <th>@lang('lang.Category Type')</th>
                        <th style="text-align: center">@lang('lang.options')</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($books as $book)
                        <tr>
                            <td><img class="img-responsive img-south"  style="max-width: 100px" src="{{$book->getImage()}}"></td>
                            <td>{{$book->url}}</td>
                            <td>{{$book->college_name}}</td>
                            <td>{{$book->type_book}}</td>
                            <td>{{$book->type_Requirement_or_colleges}}</td>

                            <td style="text-align: center">
                                <a class="btn btn-danger delete-image"
                                   data-image-id="{{$book->id}}"

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
@endsection