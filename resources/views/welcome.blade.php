<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Monsieur+La+Doulaise" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Italianno" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
    
        <!-- Styles -->
        <style>
        @font-face {
            font-family: italiano;
            src: url('/fonts/Italianno-Regular-OTF.otf') format("truetype");
        }

            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .main-container {
                position: relative;
            }
            .invite{
                position: absolute;
                background: #fff;
                height: 100px;
                z-index: 10;
                top: 50%;
                border: 1px solid;
                left: 20px;
            }
            .invitition {
                width: 410px;
                height: 670px;
                position: absolute;
                top:0;
                z-index: 4
            }
            .text {
                position: absolute;
                width: 347px;
                height: 565px;
                background: rgba(255, 255, 255, 0.87);
                border-radius: 115px;
                top: 100px;
                left: 47px; 
                padding: 45px;
                color: #51182f;
            }
            .couple {
                height: 670px;
                background-color: #50182E;
                color: #cc9361;
                text-align: center;
            }
            .couple p {
                font-family:  'Italianno', cursive;
                font-size: 45px;
            }

            .report {
                font-family: italiano;
                padding: 10px;
            }
            .report1{
                font-size: 16px;
                padding-top: 20px;
            }
            .report2 {
                font-size: 13px;
                padding-top: 45px;
            }
            .hidden {
                display: none;
            }

            @media only screen and (min-width: 320px) and (max-width: 480px) {
                .mobile-slide {
                    overflow:
                    auto !important;
                    height: auto !important;
                }
                .invitition {
                    top: 100%;
                    max-width: 350px;

                }  
                .text{
                    top:calc(100% + 100px);
                    width: 300px;
                    padding: 29px;
                } 
                .report{
                    padding: 10px 10px 10px 4px;
                }
                .report1 {
                    font-size: 14px;
                    padding-top: 45px;
                }
                .report2 {
                    font-size: 12px;
                }
            }
            @media only screen and (min-width: 481px) and (max-width: 720px) {
                .mobile-slide {
                    overflow:
                    auto !important;
                    height: auto !important;
                }
                .invitition {
                    top: 100%;
                    max-width: 550px !important;

                }  
                .text{
                    top:calc(100% + 100px);
                } 
                
                .report1 {
                    font-size: 15px;
                    padding-top: 45px;
                }
                .report2 {
                    font-size: 13px;
                }
            }
            @media only screen and (min-width: 721px) and (max-width: 970px) {
                .mobile-slide {
                    overflow:
                    auto !important;
                    height: auto !important;
                }
                .invitition {
        
                    width: 375px;

                }  
                .text{

                    width: 320px;
                } 
                
                .report1 {
                    font-size: 15px;
                    padding-top: 45px;
                }
                .report2 {
                    font-size: 13px;
                }
                .couple p {
                    text-align: right;
                    padding-right: 50px;
                }
            }


    </style> 
        </style>
    </head>
    <body>
       <div class="container-fluid main-container"> 
            <div id="myCarousel" class="carousel slide mobile-slide" style="height: 670px; overflow: hidden">
                <!-- Indicators -->
                <!-- <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol> -->

                <!-- Wrapper for slides -->
                <div class="carousel-inner mobile">
                    <div class="item active"  style="width: 100%;">
                        <div class="couple">
                            <p style="padding-top: 300px">Robert & Gayane</p>
                            <p>17.10.2017</p>
                        </div>
                    </div>

                    <div class="item " style="width: 100%;">
                        <img src="/images/4.jpg" style="width:100%;">
                    </div>

                    <div class="item" style="width: 100%;">
                        <img src="/images/RG1.png" style="width:100%;">
                    </div>
                
                    
                    <div class="item" style="width: 100%;">
                        <img src="/images/RG3.png" style="width:100%;">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" style="visibility: hidden;"></span>
                    <span class="sr-only" style="visibility: hidden;">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
                
            </div>
            <div class="hidden">
                <img src="/images/ramka93.png" class='invitition'>
                <div class="text">
                    <p class="report report1">Дорогие <span style="text-transform: uppercase;">{{$user->lastname}} {{$user->name}}</span> Мы рады сообщить Вам, что 17.10.2017 состоится самое главное торжество в нашей жизни - день нашей свадьбы. 
                    Приглашаем Вас разделить с нами радость этого незабываемого дня. Ждём Вас 17.10.2017 в 17:30 в ресторане "Morena Gold" по адресу: г.Масис, ул. Мхитара Гераци 7/8.</p>
                    <p class="report report2" >Свадебное расписание:17.10.17
15:30 Церемония Венчания
Место:г.Эчмиадзин, ул.Нар-Доса, 1 Армянская Апостольская Церковь "Сурб Аствацацин" 
17:30 Свадебное торжество(заголовок)
Место: Армения, г.Масис, ул.Мхитара Гераци,7/8
Ресторан "Morena Gold"</p>
                </div>
            </div>

        </div>
    </body>
</html>

<script type="text/javascript">
    $(document).ready(function(){
        function open() {
            $('.hidden').css("cssText", "display: block !important;").fadeIn();
        }
        setTimeout(open, 1000);
    })
</script>
