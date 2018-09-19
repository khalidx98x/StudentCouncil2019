@extends('base_layout._layout')
@section('style')
    <style>
        .img-south{
            max-width: 80px;
        }
    </style>
    @endsection

@section('body')
    <div class="col-md-8">



        <div class="portlet box blue-chambray">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-cogs"></i>@lang('lang.South description')
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
                            <th>@lang('lang.description')</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($souths as $south)
                            <tr>
                                <td>{{str_limit($south->body,5)}}</td>


                        @endforeach

                        </tbody>
                    </table>
                    <div class="col-md-12 text-right">
                        {{$souths->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection



