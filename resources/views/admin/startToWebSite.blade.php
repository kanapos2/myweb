<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>La-O bubble Tea</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .btn {
            /*background-color: #6ebee6;*/
            width: 300px;
            height: 50px;
            margin: auto;
        }

    </style>

</head>
<body style="background-color: rgba(11,12,24,0.86)">

    <div class="flex-center position-ref full-height" >

        <div class="title m-b-md">
            <img src="{{asset('images/logo.png')}}" alt="logo"  style="width: 100% ; height: auto" >
        </div>

        <div>
            <div style="width: 100% ; height: auto ">
                <p style="text-align: center ; font-size: 3vw;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ประวัติของร้านเรา
                </p>
                <div style="font-size: 1.5vw ; margin-left: 100px ">
                    <p>ชา ละ-ออ ชาไต้หวันแท้ คิดค้นสูตรทุกสูตรด้วยความพิถีพิถันทุกเมนู</p>
                    <p>ให้ลิ้มรสสัมผัสของกลิ่นใบชาในฉบับของ ชา ละ-ออ</p>
                    <p>รวมไปถึงยังมี เมนู ทูโทนให้ลิ้มลอง</p>
                    <p>พบกับพวกเราได้ที่ โรงอาหารหน่วยบัญชาการอากาศโยธิน</p>

                    <a href="{{ url('/home') }}" class="btn btn-primary btn-block" style="text-align: center">
                        <div class="content" style="padding-top: 5px ; font-size: 20px">
                            Enter Website
                        </div>
                    </a>
                </div>
            </div>
        </div>




    </div>
</body>
</html>
