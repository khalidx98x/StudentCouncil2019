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
                    <h1>انشا حسابك الخاص
                    </h1>
                    <hr>
                </div>
                <form>
                    <div class="form-group">
                        <input type="type" class="form-control" id="firstnamee" aria-describedby="emailHelp" placeholder="الاسم الاول">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="lastnmae" placeholder="الاسام الثاني">
                    </div>
                     <div class="form-group">
                        <input type="email" class="form-control" id="email" placeholder="البريد الاكتروني">
                    </div> 
                    <div class="form-group">
                        <input type="password" class="form-control" id="password" placeholder="كلمة السر">
                    </div>
                    
                    <button type="submit" class=" deis-btn btn btn-primary">تسجيل  </button>
                </form>
            </div>

        </div>
        <div class="col-lg-3"></div>
    </div>

    @endsection