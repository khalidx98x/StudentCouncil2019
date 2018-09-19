@extends('web_base_layouts.layout')

@section('body')
    <div class="container header">
        <div class="row ">
            <div class="col-md-10">
                <h1 class="title">مجلس طلاب الجامعة الاسلامية</h1>
            </div>
            <div class="col-md-2 " style="text-align: right">
                <img class="logo img-responsive" src="../n.jpg">
            </div>
        </div>
        <div class="row"><h1>عن المجلس _ شكاوي واقتراحات</h1></div>
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-6">
                <input type="text"><br>
                <input type="email"><br>
                <input type="text"><br>
                <textarea></textarea>
            </div>
            <div class="col-lg-2">
                <h4>المرسل اليه</h4>
                <h4>البريد الاكتروني</h4>
                <h4>موضوع الشكوي</h4>
                <h4>تفاصيل الشكوي</h4>
            </div>
        </div>
    </div>

   @endsection