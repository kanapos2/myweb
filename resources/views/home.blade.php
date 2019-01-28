@extends('layouts.app')

@section('content')

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        <style>
            body {
                font-family: "Lato", sans-serif;
            }


            .sidenav a {
                padding: 6px 8px 6px 16px;
                text-decoration: none;
                font-size: 25px;
                color: #818181;
                display: block;
            }

            .sidenav a:hover {
                color: #f1f1f1;
            }


        </style>

    </head>

    <body style="background-color: rgba(11,12,24,0.86)">

        <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators" style="margin-left: 20%;">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active" >
                    <img src="{{ asset('images/IMG_7406.JPG') }}" alt="Chocco Lava" width="25%" style="margin-left: 30%">
                    <div class="carousel-caption" style="margin-left: 5%; margin-top: 5%">
                        <h3>Chocco Lava</h3>
                        <p>ช็อคโก้ลาวา</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/IMG_7407.JPG') }}" alt="Taro Tea" width="25%" style="margin-left: 30%">
                    <div class="carousel-caption" style="margin-left: 5%; margin-top: 5%">
                        <h3>Taro Tea</h3>
                        <p>ชาเผือก</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/Thai Tea Green Tea.jpg') }}" alt="Thai Tea Green Tea" width="25%" style="margin-left: 30%">
                    <div class="carousel-caption" style="margin-left: 5%; margin-top: 5%">
                        <h3>Thai Tea Green Tea</h3>
                        <p>ชาไทยชาเขียว</p>
                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev" style="margin-left: 25%">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next" style="margin-right: 20%">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>

    </body>

@endsection
