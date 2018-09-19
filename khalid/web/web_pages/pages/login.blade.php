@extends('web_base_layouts.layout')

@section('body')



    <div class="container">
        <div class="row header">
            <div class="col-md-10">
                <h1 class="title">مجلس طلاب الجامعة الاسلامية</h1>
                
            </div>
            <div class="col-md-2 " style="float: right">
                <img class="logo img-responsive" src="../n.jpg">
            </div>
        </div>
        <div class="row ">
            <div class="col-lg-4"></div>
            <div class='col-lg-4 regester'>
                <div>
                    <h1>نرحب بعودتكم الينا</h1>
                    <h1 >تسجيل الدخول الى حسابك</h1>
                    <hr>
                </div>
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">البريد الاكتروني</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="البريد الاكتروني">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">كلمة السر</label>
                        <input type="كلمة السر" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    
                    <button type="submit" class=" deis-btn btn btn-primary">تسجيل الدخول </button>
                </form>
            </div>

        </div>
        <div class="col-lg-3"></div>
    </div>

@endsection