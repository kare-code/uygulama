@extends('layouts.app')
@section('title')
    Haber Sayfası
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <?php
            $i=0;
            ?>
            @foreach($haberler as $haber)
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-image">
                            <img class="img-responsive" src="http://placehold.it/500x500">

                        </div><!-- card image -->

                        <div class="card-content">
                            <h4 class="card-title">{{$haber->baslik}}</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="card-function">{{$haber->user_id}}</p>
                                </div>
                                <div class="col-md-6">
                                    <a href="javascript:void(0)" class="btn-show" data-rel="<?=$i;?>">Haberi Oku</a>
                                </div>
                            </div>
                        </div><!-- card content -->
                        <div class="card-reveal" data-rel="<?=$i;?>">
                            <button type="button" class="close" data-rel="<?=$i;?>" data-dismiss="modal"
                                    aria-label="Close"><span
                                        aria-hidden="true">×</span></button>
                            <p>
                                {{$haber->aciklama}}
                                <a href="/haber-icerik/sadsa"> Haberin Devamı..</a>
                            </p>

                        </div><!-- card reveal -->
                    </div>
                </div>
                <?php $i++;?>
            @endforeach
        </div>
    </div>

@endsection

@section('css')
    <style>
        @import url(http://fonts.googleapis.com/css?family=Roboto:400,300);
        @import url(//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css);

        .card .card-image {
            min-height: 300px;
            overflow: hidden;
            -webkit-transform-style: preserve-3d;
            -moz-transform-style: preserve-3d;
            -ms-transform-style: preserve-3d;
            -o-transform-style: preserve-3d;
            transform-style: preserve-3d;
        }

        .card .card-image img {
            -webkit-transition: all 0.4s ease;
            -moz-transition: all 0.4s ease;
            -ms-transition: all 0.4s ease;
            -o-transition: all 0.4s ease;
            transition: all 0.4s ease;
        }

        .card .card-image:hover img {
            -webkit-transform: scale(1.2);
            -moz-transform: scale(1.2);
            -ms-transform: scale(1.2);
            -o-transform: scale(1.2);
            transform: scale(1.2);
        }

        .card {
            font-family: 'Roboto', sans-serif;
            margin-top: 10px;
            position: relative;
            -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
            -moz-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
            box-shadow: 4 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
        }

        .card .card-content {
            padding: 20px;
            min-height: 100px;
        }

        .card .card-content .card-title, .card-reveal .card-title {
            font-size: 24px;
            font-weight: 200;
        }

        .card .card-function {
            padding: 0 20px 0 0;
        }

        .card .card-action a {
            font-size: 15px;
            color: #ffab40;
            text-transform: uppercase;
            margin-right: 20px;
            -webkit-transition: color 0.3s ease;
            -moz-transition: color 0.3s ease;
            -o-transition: color 0.3s ease;
            -ms-transition: color 0.3s ease;
            transition: color 0.3s ease;
        }

        .card .card-action a:hover {
            color: #ffd8a6;
            text-decoration: none;
        }

        .card .card-reveal {
            padding: 20px;
            position: absolute;
            background-color: #FFF;
            width: 100%;
            overflow-y: auto;
            /*top: 0;*/
            left: 0;
            bottom: 0;
            height: 100%;
            z-index: 1;
            display: none;
        }

        .card .card-reveal p {
            color: rgba(0, 0, 0, 0.71);
            margin: 20px;
        }

        .btn-custom {
            background-color: transparent;
            font-size: 18px;
        }

        .tabs-below > .nav-tabs {
            border-bottom: 0;
        }

        .tabs-below > .nav-tabs > li {
            margin-top: -1px;
            margin-bottom: 0;
            width: 50%;
        }

        .tabs-below > .nav-tabs > li > a {
            -webkit-border-radius: 0 0 4px 4px;
            -moz-border-radius: 0 0 4px 4px;
            border-radius: 0 0 4px 4px;
        }

        .tabs-below > .nav-tabs > li > a:hover,
        .tabs-below > .nav-tabs > li > a:focus {
            border-bottom-color: transparent;
        }

        @media (min-width: 1200px) {
            .btn-show {
                float: right;
            }
        }

    </style>
@endsection

@section('js')
    <script>
        $(function () {

            $('.btn-show').on('click', function () {
                $('div.card-reveal[data-rel=' + $(this).data('rel') + ']').slideToggle('slow');
            });

            $('.card-reveal .close').on('click', function () {
                $('div.card-reveal[data-rel=' + $(this).data('rel') + ']').slideToggle('slow');
            });
        });
    </script>
@endsection
