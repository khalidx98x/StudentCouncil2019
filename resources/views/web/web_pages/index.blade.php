@extends('web_base_layouts.layout')

@section('body')




    <div class="container">
        <div class="row header">
            <div class="col-md-10">
                <img src="{{asset('majles.png')}}" alt="" class="majlas">
            </div>
            <div class="col-md-2 " style="text-align: right">
                <img class="logo img-responsive" src="n.jpg">
            </div>
        </div>
    </div>
    <div id="myslide" class="carousel slide  slider" data-ride="carousel">
        <!-- Indicators -->
        <!--        <div class="container">-->
        <div class="">
            <ol class="carousel-indicators hidden-xs">
                <li data-target="#myslide" data-slide-to="0" class="active"></li>
                <li data-target="#myslide" data-slide-to="1"></li>
                <li data-target="#myslide" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="assets/imge/9.jpg" alt="..." class="imge-1 img-responsive">
                    <div class="carousel-caption">
                        imge one
                    </div>
                </div>
                <div class="item">
                    <img src="assets/imge/10.jpg" alt="..." class="imge-1 img-responsive">
                    <div class="carousel-caption">
                        imge tow
                    </div>
                </div>
                <div class="item">
                    <img src="assets/imge/111.jpg" alt="..." class="imge-1 img-responsive">
                    <div class="carousel-caption">
                        imge three
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control hidden-xs hidden-sm  hidden-md" href="#myslide" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left " aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
            <a class="right carousel-control hidden-xs hidden-sm hidden-md " href="#myslide" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
        </div>
    </div>





    <div class="container">
        <div class="row ">
            <div class="col-lg-12">
                <h1 class="deis">انشطة وفعليات المجلس </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="/w3images/lights.jpg" target="_blank">
                      <img src="team-2.jpg" alt="Fjords" style="width:100%">
                      <div class="caption">
                        <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
                      </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="/w3images/nature.jpg" target="_blank">
                      <img src="team-2.jpg" alt="Fjords" style="width:100%">
                      <div class="caption">
                        <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
                      </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="/w3images/fjords.jpg" target="_blank">
                      <img src="team-2.jpg" alt="Fjords" style="width:100%">
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
        <!-- اعلانات المجلس  -->
        <div class="row ">
            <div class="col-lg-12">
                <h1 class="deis">اعلانات المجلس </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="thumbnail">
                    <a href="/w3images/lights.jpg" target="_blank">
                    <img src="team-2.jpg" alt="Fjords" style="width:100%">
                    <div class="caption">
                        <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
                    </div>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="thumbnail">
                    <a href="/w3images/nature.jpg" target="_blank">
                      <img src="team-2.jpg" alt="Fjords" style="width:100%">
                      <div class="caption">
                        <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
                      </div>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="thumbnail">
                    <a href="/w3images/fjords.jpg" target="_blank">
                      <img src="team-2.jpg" alt="Fjords" style="width:100%">
                      <div class="caption">
                        <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
                      </div>
                    </a>
                </div>
            </div>
                <div class="col-md-3">
                <div class="thumbnail">
                    <a href="/w3images/fjords.jpg" target="_blank">
                      <img src="team-2.jpg" alt="Fjords" style="width:100%">
                      <div class="caption">
                        <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
                      </div>
                    </a>
                </div>
            </div>
            
        </div>
        <div class="row ">
            <div class="col-lg-12 deis-btn">
                <button class="btn btn-success ">كلا الاعلانات</button>
            </div>
        </div>
        <div class="row ">
            <div class="col-lg-12">
                <h1 class="deis">هيكلية المجلس</h1>
            </div>
        </div>
        <div class="row">
            <div class='col-lg-12 strac'>
                <img src="team-2.jpg" alt="Fjords" style="width:100%">
            </div>
        </div>
    </div>
@endsection