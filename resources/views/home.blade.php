@extends('adminlte::page2')

@section('title','Tableau de bord')

@section('content')



    <div class="bg-color-sky-light " style="padding-bottom:200px ;">
        <div class=" container" style="padding-top:50px ;">
            <!-- Masonry Grid -->
            <div class="masonry-grid ">
                <div class="masonry-grid-sizer col-xs-6 col-sm-6 col-md-1"></div>


                <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-6">
                    <!-- Work -->
                    <div class="work">
                        <div class="work-overlay">
                            <img class="full-width img-responsive" src="{{ asset('vendor/patients.png') }}" alt="Portfolio Image">
                        </div>
                        <div class="work-content">
                            <h3 class="color-white margin-b-5">  </h3>

                        </div>
                        <a class="content-wrapper-link" href="admin.p"></a>
                    </div>
                    <!-- End Work -->
                </div>
                <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-6">
                    <!-- Work -->
                    <div class="work">
                        <div class="work-overlay">
                            <img class="full-width img-responsive" src="{{ asset('vendor/ajout-patient.png') }}" alt="Portfolio Image">
                        </div>
                        <div class="work-content">
                            <h3 class="color-white margin-b-5"></h3>

                        </div>
                        <a class="content-wrapper-link" href="ajoutPatient"></a>
                    </div>
                    <!-- End Work -->
                </div>

            </div>
            <div class="masonry-grid">
                <div class="masonry-grid-sizer col-xs-6 col-sm-6 col-md-1"></div>


                <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-6">
                    <!-- Work -->
                    <div class="work">
                        <div class="work-overlay">
                            <img class="full-width img-responsive" src="{{ asset('vendor/aliments.png') }}" alt="Portfolio Image">
                        </div>
                        <div class="work-content">
                            <h3 class="color-white margin-b-5"></h3>
                        </div>
                        <a class="content-wrapper-link" href="afficherAliments"></a>
                    </div>
                    <!-- End Work -->
                </div>
                <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-6">
                    <!-- Work -->
                    <div class="work">
                        <div class="work-overlay">
                            <img class="full-width img-responsive" src="{{ asset('vendor/ajout-aliment.png') }}" alt="Portfolio Image">
                        </div>
                        <div class="work-content">
                            <h3 class="color-white margin-b-5"> </h3>
                        </div>
                        <a class="content-wrapper-link" href="addAliment"></a>
                    </div>
                    <!-- End Work -->
                </div>

            </div>
            <!-- End Masonry Grid -->
        </div>
    </div>
@stop


    @section('css')

        <link href="{{ asset('vendor/template/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
        <!-- PAGE LEVEL PLUGIN STYLES -->
        <link href="{{ asset('vendor/template/css/animate.css') }}" rel="stylesheet">
        <link href="{{ asset('vendor/template/vendor/swiper/css/swiper.min.css') }}" rel="stylesheet" type="text/css"/>
        <!-- THEME STYLES -->
        <link href="{{ asset('vendor/template/css/layout.min.css') }}" rel="stylesheet" type="text/css"/>
    @stop



    @section('js')
        <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- CORE PLUGINS -->
        <script src="{{ asset('vendor/template/vendor/jquery.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('vendor/template/vendor/jquery-migrate.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('vendor/template/vendor/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>

        <!-- PAGE LEVEL PLUGINS -->
        <script src="{{ asset('vendor/template/vendor/jquery.easing.js') }}" type="text/javascript"></script>
        <script src="{{ asset('vendor/template/vendor/jquery.back-to-top.js') }}" type="text/javascript"></script>
        <script src="{{ asset('vendor/template/vendor/jquery.smooth-scroll.js') }}" type="text/javascript"></script>
        <script src="{{ asset('vendor/template/vendor/jquery.wow.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('vendor/template/vendor/swiper/js/swiper.jquery.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('vendor/template/vendor/masonry/jquery.masonry.pkgd.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('vendor/template/vendor/masonry/imagesloaded.pkgd.min.js') }}" type="text/javascript"></script>

        <!-- PAGE LEVEL SCRIPTS -->
        <script src="{{ asset('vendor/template/js/layout.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('vendor/template/js/components/wow.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('vendor/template/js/components/swiper.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('vendor/template/js/components/masonry.min.js') }}" type="text/javascript"></script>
    @stop