@extends('web_base_layouts.layout')

@section('body')
    <div class="container header">
        <div class="row  ">
            <div class="col-md-10">
                <h1 class="title">مجلس طلاب الجامعة الاسلامية</h1>
            </div>
            <div class="col-md-2 " style="text-align: right">
                <img class="logo img-responsive" src="../n.jpg">
            </div>
        </div>
        <div class="row ">
           <div class="col-lg-12"><h1> نماذج الاختبارات  _ متطلب كلية  </h1></div>
           <div class="row">
               <div class="col-lg-4"></div>
               <div class="col-lg-4 select-book"> 
                   <select>
                        <option>تكنولوجي المعلوامات</option>
                        <option>كلية الطب</option>
                        <option>كلية الهندسة</option>
                        <option>كلية التمريض</option>
                   </select>
            </div>
               <div class="col-lg-4"><h1> الرجاء اختر اسم اكلية  </h1></div>
        </div>
        <div class="row ">
           <div class="col-md-3">
                <div class=" book-style">
                    <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
                    <img src="../team-2.jpg" alt="Fjords" style="width:100%">
                    <div class="caption">
                    </div>
                    <a class="btn  btn-success">تحميل </a>
                </div>
            </div><div class="col-md-3">
                <div class=" book-style">
                    <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
                    <img src="../team-2.jpg" alt="Fjords" style="width:100%">
                    <div class="caption">
                    </div>
                    <a class="btn  btn-success">تحميل </a>
                </div>
            </div><div class="col-md-3">
                <div class=" book-style">
                    <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
                    <img src="../team-2.jpg" alt="Fjords" style="width:100%">
                    <div class="caption">
                    </div>
                    <a class="btn  btn-success">تحميل </a>
                </div>
            </div><div class="col-md-3">
                <div class=" book-style">
                    <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
                    <img src="../team-2.jpg" alt="Fjords" style="width:100%">
                    <div class="caption">
                    </div>
                    <a class="btn  btn-success">تحميل </a>
                </div>
            </div>
        </div>

    </div>
        </div>
 @endsection