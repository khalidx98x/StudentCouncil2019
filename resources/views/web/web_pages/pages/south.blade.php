@extends('web_base_layouts.layout')

@section('body')

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
                <h1>لجنة الجنوب</h1>
             </div>
        </div>
        <div class="row des">
            <div class="col-lg-12">
                <h4>سشيسيبلةنيسالتابتينلاتسايبتنلاتنبلاتنيبالتنا تاتايل تايتبلا تالل تيابلتن ابتنلايتيبلاتالتناتللاتاسشيسيبلةنيسالتابتينلاتسايبتنلاتنبلاتنيبالتنا تاتايل تايتبلا تالل تيابلتن ابتنلايتيبلاتالتناتللاتاسشيسيبلةنيسالتابتينلاتسايبتنلاتنبلاتنيبالتنا تاتايل تايتبلا تالل تيابلتن ابتنلايتيبلاتالتناتللاتاسشيسيبلةنيسالتابتينلاتسايبتنلاتنبلاتنيبالتنا تاتايل تايتبلا تالل تيابلتن ابتنلايتيبلاتالتناتللاتاسشيسيبلةنيسالتابتينلاتسايبتنلاتنبلاتنيبالتنا تاتايل تايتبلا تالل تيابلتن ابتنلايتيبلاتالتناتللاتاسشيسيبلةنيسالتابتينلاتسايبتنلاتنبلاتنيبالتنا تاتايل تايتبلا تالل تيابلتن ابتنلايتيبلاتالتناتللاتاسشيسيبلةنيسالتابتينلاتسايبتنلاتنبلاتنيبالتنا تاتايل تايتبلا تالل تيابلتن ابتنلايتيبلاتالتناتللاتاب</h4>
             </div>
        </div>
        <div class="row ">
            <div class="col-lg-12">
                <h1 class="deis">انشطة وفعليات المجلس </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="/w3images/lights.jpg" target="_blank">
                      <img src="../team-2.jpg" alt="Fjords" style="width:100%">
                      <div class="caption">
                        <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
                      </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="/w3images/nature.jpg" target="_blank">
                      <img src="../team-2.jpg" alt="Fjords" style="width:100%">
                      <div class="caption">
                        <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
                      </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="south_activety.blade.php" target="_blank">
                      <img src="../team-2.jpg" alt="Fjords" style="width:100%">
                      <div class="caption">
                        <p>{{str_limit('$outh->description,100')}}</p>
                      </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col-lg-12 deis-btn">
                <button class="btn btn-success ">كل الانشطة</button>
            </div>
        </div>
    </div>


@endsection