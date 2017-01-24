@extends('layout')
@section('content')
    <div class="container">
        <div class="jumbotron text-center galeriaJumbo">
            <h1 class="h1-galeria">Galeria</h1>
            <p class="p-galeria">Zapraszamy do obejrzenia galerii zdjęć, przedstawiającej
                naszą wypożyczalnię, zbiory gier oraz odwiedzających nas graczy!</p>

        </div>
    </div>

    <div class="container">
        <div id="main_area">
            <!-- Slider -->
            <div class="row">
                <div class="col-sm-6" id="slider-thumbs">
                    <!-- Bottom switcher of slider -->
                    <ul class="hide-bullets hidden-xs">
                        <li class="col-sm-3">
                            <a class="thumbnail" id="carousel-selector-0">
                                <img src="thumb/tn_1.jpg" alt="thumb1">
                            </a>
                        </li>

                        <li class="col-sm-3">
                            <a class="thumbnail" id="carousel-selector-1">
                                <img src="thumb/tn_2.jpg" alt="thumb2">
                            </a>
                        </li>

                        <li class="col-sm-3">
                            <a class="thumbnail" id="carousel-selector-2">
                                <img src="thumb/tn_3.jpg" alt="thumb3">
                            </a>
                        </li>

                        <li class="col-sm-3">
                            <a class="thumbnail" id="carousel-selector-3">
                                <img src="thumb/tn_4.jpg" alt="thumb4">
                            </a>
                        </li>

                        <li class="col-sm-3">
                            <a class="thumbnail" id="carousel-selector-4">
                                <img src="thumb/tn_5.jpg" alt="thumb5">
                            </a>
                        </li>

                        <li class="col-sm-3">
                            <a class="thumbnail" id="carousel-selector-5">
                                <img src="thumb/tn_6.jpg" alt="thumb6">
                            </a>
                        </li>
                        <li class="col-sm-3">
                            <a class="thumbnail" id="carousel-selector-6">
                                <img src="thumb/tn_7.jpg" alt="thumb7">
                            </a>
                        </li>

                        <li class="col-sm-3">
                            <a class="thumbnail" id="carousel-selector-7">
                                <img src="thumb/tn_8.jpg" alt="thumb8">
                            </a>
                        </li>

                        <li class="col-sm-3">
                            <a class="thumbnail" id="carousel-selector-8">
                                <img src="thumb/tn_9.jpg" alt="thumb9">
                            </a>
                        </li>

                        <li class="col-sm-3">
                            <a class="thumbnail" id="carousel-selector-9">
                                <img src="thumb/tn_10.jpg" alt="thumb10">
                            </a>
                        </li>
                        <li class="col-sm-3">
                            <a class="thumbnail" id="carousel-selector-10">
                                <img src="thumb/tn_11.jpg" alt="thumb11">
                            </a>
                        </li>

                        <li class="col-sm-3">
                            <a class="thumbnail" id="carousel-selector-11"
                            ><img src="thumb/tn_12.jpg" alt="thumb12">
                            </a>
                        </li>

                        <li class="col-sm-3">
                            <a class="thumbnail" id="carousel-selector-12">
                                <img src="thumb/tn_13.jpg" alt="thumb13">
                            </a>
                        </li>

                        <li class="col-sm-3">
                            <a class="thumbnail" id="carousel-selector-13">
                                <img src="thumb/tn_14.jpg" alt="thumb14">
                            </a>
                        </li>
                        <li class="col-sm-3">
                            <a class="thumbnail" id="carousel-selector-14">
                                <img src="thumb/tn_15.jpg" alt="thumb15">
                            </a>
                        </li>

                        <li class="col-sm-3">
                            <a class="thumbnail" id="carousel-selector-15">
                                <img src="thumb/tn_16.jpg" alt="thumb16">
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-6">
                    <div class="col-xs-12" id="slider">
                        <!-- Top part of the slider -->
                        <div class="row">
                            <div class="col-sm-12" id="carousel-bounding-box">
                                <div class="carousel slide" id="myCarousel">
                                    <!-- Carousel items -->
                                    <div class="carousel-inner">
                                        <div class="active item" data-slide-number="0">
                                            <img src="img/1.jpg" alt="1"></div>

                                        <div class="item" data-slide-number="1">
                                            <img src="img/2.jpg" alt="2"></div>

                                        <div class="item" data-slide-number="2">
                                            <img src="img/3.jpg" alt="3"></div>

                                        <div class="item" data-slide-number="3">
                                            <img src="img/4.jpg" alt="4"></div>

                                        <div class="item" data-slide-number="4">
                                            <img src="img/5.jpg" alt="5"></div>

                                        <div class="item" data-slide-number="5">
                                            <img src="img/6.jpg" alt="6"></div>

                                        <div class="item" data-slide-number="6">
                                            <img src="img/7.jpg" alt="7"></div>

                                        <div class="item" data-slide-number="7">
                                            <img src="img/8.jpg" alt="8"></div>

                                        <div class="item" data-slide-number="8">
                                            <img src="img/9.jpg" alt="9"></div>

                                        <div class="item" data-slide-number="9">
                                            <img src="img/10.jpg" alt="10"></div>

                                        <div class="item" data-slide-number="10">
                                            <img src="img/11.jpg" alt="11"></div>

                                        <div class="item" data-slide-number="11">
                                            <img src="img/12.jpg" alt="12"></div>

                                        <div class="item" data-slide-number="12">
                                            <img src="img/13.jpg" alt="13"></div>

                                        <div class="item" data-slide-number="13">
                                            <img src="img/14.jpg" alt="14"></div>

                                        <div class="item" data-slide-number="14">
                                            <img src="img/15.jpg" alt="15"></div>

                                        <div class="item" data-slide-number="15">
                                            <img src="img/16.jpg" alt="16"></div>
                                    </div>
                                    <!-- Carousel nav -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                    </a>
                                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/Slider-->
            </div>

        </div>
    </div>
@endsection