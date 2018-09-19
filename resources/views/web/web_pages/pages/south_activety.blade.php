@extends('web_base_layouts.layout')

@section('body')

    <div class="container header">

        <div class="container">
            <div class="row header">
                <div class="col-md-10">
                    <h1 class="title">مجلس طلاب الجامعة الاسلامية</h1>
                </div>
                <div class="col-md-2 " style="float: right">
                    <img class="logo img-responsive" src="../team-2.jpg">
                </div>
            </div>
            <div class="row des ">
                <div class="col-lg-12">
                    <h1>لجنة الجنوب _ الانشطة والفعليات</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">

                </div>
                <div class="col-md-4">

                </div>
                <div class="col-md-4">

                    <a href="/w3images/fjords.jpg" target="_blank"></a>
                    <img src="../team-2.jpg" alt="Fjords" style="width:100%">

                </div>
                <div class="row">
                    <div class="caption col-lg-12">
                        {{--                        <p>{{$south->description}}</p>--}}
                    </div>
                </div>
            </div>
        </div>


    </div>


@endsection