@extends('layouts.master')

@section('content')

<!--Navigation & Intro-->
<header>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="/1017studios/img/logo.png" height="60"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!--Links-->
                <ul class="navbar-nav ml-auto smooth-scroll">
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-offset="80">Portofolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-offset="80">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-offset="20">Testimoni</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-offset="80">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-offset="80">Berita</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <!--/Navbar-->

    <!--Intro Section-->
    <section id="home" class="view" style="background-image: url('https://1017studio.com/1017studios/img/default-background.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
        <div class="mask">
            <div class="container h-70 d-flex justify-content-center align-items-center">
                <div class="row pt-5 mt-3">
                    <div class="col-sm-7 text-center text-md-left" style="margin-top: -2rem;">
                        <div class="white-text">
                            <h4 class="h4-responsive font-weight-bold mt-md-5 mt-0 gotham-narrow-black wow fadeInLeft" data-wow-delay="0.3s">
                                Mengapa Memilih Kami ?
                            </h4>
                            <p class="wow fadeInLeft mb-3" data-wow-delay="0.3s" style="font-size: 4rem;font-family: 'GothamNarrow-Black';margin-top: -1.5rem;">
                                KAMI AHLINYA
                            </p>
                            <p class="wow fadeInLeft mb-3" data-wow-delay="0.3s" style="font-size: 3rem;margin-top: -2rem;color: #ffdd17;font-family: 'Gotham-Medium';line-height: 3rem;">
                                Jasa Desain Logo<br>
                                dan Website<br>
                                Sejak 2014
                            </p>
                            <a href="#" style="font-family: 'Gotham-Light';font-size: 0.8rem; color: white">
                                <p class="wow fadeInLeft mb-3" data-wow-delay="0.3s" >Baca Selengkapnya ...</p>
                            </a>
                            <br>
                            <a href="#" class="btn btn-rounded font-weight-bold ml-lg-0 wow fadeInLeft" data-wow-delay="0.3s" style="font-size: 1.3rem;font-family: 'Gotham-Ultra';width: 20rem;background-color: #ffdd17;color: black;margin-top: 2rem;">
                                SAYA MAU PESAN !!
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-5 text-center text-md-left boat" style="margin-top: 2rem;">
                        <img class="img-fluid" src="/1017studios/img/logo.png">
                    </div>
                </div>
            </div>
        </div>
    </section>

</header>
<!--/Navigation & Intro-->

<div class="container">
    <div class="row portofolio-home" id="portofolio-home" style="margin-top: -9rem;">

        <div class="col-sm-4 pics animation all 1 view-filter" style="text-align: center;margin-bottom: 30px;">
            <div class="waves-effect waves-light">
                <a href="#!">
                    <div class="view overlay">
                        <img src="/1017studios/img/default-port-1.jpg" class="img-fluid" alt="">
                        <div class="mask flex-center rgba-yellow-strong">
                            <h4 class="white-text font-weight-bold" style="font-family: 'GothamNarrow-Black';color: black!important;">1017 Studios</h4>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-sm-4 pics animation all 1 view-filter" style="text-align: center;margin-bottom: 30px;">
            <div class="waves-effect waves-light">
                <a href="#!">
                    <div class="view overlay">
                        <img src="/1017studios/img/default-port-2.jpg" class="img-fluid" alt="">
                        <div class="mask flex-center rgba-yellow-strong">
                            <h4 class="white-text font-weight-bold" style="font-family: 'GothamNarrow-Black';color: black!important;">1017 Studios</h4>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-sm-4 pics animation all 1 view-filter" style="text-align: center;margin-bottom: 30px;">
            <div class="waves-effect waves-light">
                <a href="#!">
                    <div class="view overlay">
                        <img src="/1017studios/img/default-port-3.jpg" class="img-fluid" alt="">
                        <div class="mask flex-center rgba-yellow-strong">
                            <h4 class="white-text font-weight-bold" style="font-family: 'GothamNarrow-Black';color: black!important;">1017 Studios</h4>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-sm-4 pics animation all 1 view-filter" style="text-align: center;margin-bottom: 30px;">
            <div class="waves-effect waves-light">
                <a href="#!">
                    <div class="view overlay">
                        <img src="/1017studios/img/default-port-1.jpg" class="img-fluid" alt="">
                        <div class="mask flex-center rgba-yellow-strong">
                            <h4 class="white-text font-weight-bold" style="font-family: 'GothamNarrow-Black';color: black!important;">1017 Studios</h4>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-sm-4 pics animation all 1 view-filter" style="text-align: center;margin-bottom: 30px;">
            <div class="waves-effect waves-light">
                <a href="#!">
                    <div class="view overlay">
                        <img src="/1017studios/img/default-port-2.jpg" class="img-fluid" alt="">
                        <div class="mask flex-center rgba-yellow-strong">
                            <h4 class="white-text font-weight-bold" style="font-family: 'GothamNarrow-Black';color: black!important;">1017 Studios</h4>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-sm-4 pics animation all 1 view-filter" style="text-align: center;margin-bottom: 30px;">
            <div class="waves-effect waves-light">
                <a href="#!">
                    <div class="view overlay">
                        <img src="/1017studios/img/default-port-3.jpg" class="img-fluid" alt="">
                        <div class="mask flex-center rgba-yellow-strong">
                            <h4 class="white-text font-weight-bold" style="font-family: 'GothamNarrow-Black';color: black!important;">1017 Studios</h4>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-sm-4 pics animation all 2 view-filter" style="text-align: center;margin-bottom: 30px;">
            <div class="waves-effect waves-light">
                <a href="#!">
                    <div class="view overlay">
                        <img src="/1017studios/img/default-port-4.jpg" class="img-fluid" alt="">
                        <div class="mask flex-center rgba-yellow-strong">
                            <h4 class="white-text font-weight-bold" style="font-family: 'GothamNarrow-Black';color: black!important;">1017 Studios</h4>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-sm-4 pics animation all 2 view-filter" style="text-align: center;margin-bottom: 30px;">
            <div class="waves-effect waves-light">
                <a href="#!">
                    <div class="view overlay">
                        <img src="/1017studios/img/default-port-5.jpg" class="img-fluid" alt="">
                        <div class="mask flex-center rgba-yellow-strong">
                            <h4 class="white-text font-weight-bold" style="font-family: 'GothamNarrow-Black';color: black!important;">1017 Studios</h4>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-sm-4 pics animation all 2 view-filter" style="text-align: center;margin-bottom: 30px;">
            <div class="waves-effect waves-light">
                <a href="#!">
                    <div class="view overlay">
                        <img src="/1017studios/img/default-port-6.jpg" class="img-fluid" alt="">
                        <div class="mask flex-center rgba-yellow-strong">
                            <h4 class="white-text font-weight-bold" style="font-family: 'GothamNarrow-Black';color: black!important;">1017 Studios</h4>
                        </div>
                    </div>
                </a>
            </div>
        </div>

    </div>

    <div class="col-sm-12 d-flex justify-content-center mb-5 pb-2">
        <button type="button" class="btn btn-rounded btn-white font-weight-bold waves-effect filter" data-rel="all" style="min-width: 8rem;font-family: 'Gotham-Medium';background-color: #ffdd17!important;">All</button>
        <button type="button" class="btn btn-rounded btn-white font-weight-bold waves-effect filter" data-rel="1" style="min-width: 8rem;font-family: 'Gotham-Medium';background-color: #ffdd17!important;">Logo</button>
        <button type="button" class="btn btn-rounded btn-white font-weight-bold waves-effect filter" data-rel="2" style="min-width: 8rem;font-family: 'Gotham-Medium';background-color: #ffdd17!important;">Website</button>
    </div>

</div>


<div class="about-home">

</div>

@endsection

@section('jquery')
<script>
    // Animation init
    new WOW().init();

    // Gallery
    $(function () {
        var selectedClass = "";
        $(".filter").click(function () {
            selectedClass = $(this).attr("data-rel");
            $("#portofolio-home").fadeTo(500, 0.1);
            $("#portofolio-home .view-filter").not("." + selectedClass).fadeOut().removeClass('animation');
            setTimeout(function () {
                $("." + selectedClass).fadeIn().addClass('animation');
                $("#portofolio-home").fadeTo(500, 1);
            }, 300);
        });
    });

</script>
@endsection