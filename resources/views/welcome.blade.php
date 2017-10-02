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
    
        <!-- Styles -->
        <style>
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
            *
        {
        margin: 0;
        padding: 0;
        color: black !important;}
        .owl-item
        {
        width: 100%;
        margin: 0 auto;
        position: relative;
        background-color: rgba(211, 210, 205, 0.48);
        }
        .carousel {
        position: relative;
        }
        .info [class*="btn"] {
        text-align: center;
        width: 50%;
        float: left;
        background: #eae9e7;
        color: #888;
        height: 208px;
        padding-top: 55px;
        padding-left: 50px;
        padding-right: 50px;
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        text-transform: uppercase;
        }
        .info [class*="btn"]::before {
        display: block;
        margin: 0 auto;
        content: "";
        background: url(images/sprite.png);
        width: 97px;
        height: 67px;
        margin-bottom: 8px;
        }

        .info [class*="btn"]:hover {
        background: #fff !important;
        animation: fadein 1s;
        text-decoration: none;
        }



        .info [class*="btn"]:nth-child(n+2):nth-child(-n+3) {
        background: #aaaaaa;
        }


        .info .btn__icon-1::before {
        background-position: -5px -161px;
        }
        .info .btn__icon-2::before {
        background-position: -112px -161px;
        }
        .info .btn__icon-3::before {
        background-position: -219px -5px;
        }
        .info .btn__icon-4::before {
        background-position: -219px -82px;
        }

        .info .btn__icon-1:hover::before {
        background-position: -5px -10px;
        }
        .info .btn__icon-2:hover::before {
        background-position: -112px -5px;
        }
        .info .btn__icon-3:hover::before {
        background-position: -5px -82px;
        }
        .info .btn__icon-4:hover::before {
        background-position: -112px -82px;
        }

        [class*="btn"] {
        display: inline-block;
        letter-spacing: 2.8px;
        font-weight: 700;
        }
        a
        {
        -moz-transition: 0.3s;
        -o-transition: 0.3s;
        -webkit-transition: 0.3s;
        transition: 0.3s;
        }
        #carousel-indicators
        {
        width: 41px;
        list-style: none;
        position: absolute;
        top: 356px;
        left: 1052px;

        }
        #carousel-indicators li
        {
        border-color: #cbcbcb;
        width: 11px;
        height: 11px;
        margin: 0;
        transition: 0.4s;
        background-color: #cbcbcb;
        }
        .carousel-indicators .active
        {
        background-color: white !important;
        width: 10px;
        height: 10px;

        }
        .carousel-inner
        {
        background: url("images/kamera.png") -16px -22px;
        background-size: 108.1px 100.2px;
        background-repeat: no-repeat;
        }
        .karuseli_dzax>h2
        {
        color: white;
        letter-spacing: 7.2px;
        font-size: 36px;
        padding-left: 100px;
        line-height: 48px;
        padding-top: 50px;
        font-weight: 700;
        }
        .karuseli_dzax
        {
        float: left;
        width: 380px;
        height: 356px;
        }
        .karuseli_aj{
            float: left;
            background-color: #ffffff;
            width: 100% ;
        }
        .time_descr>time>span
        {
        font-size: 36px;
        line-height: 43px;
        vertical-align: bottom;
        color: black;
        }
        .time_descr>time
        {

        display: block;
        margin-top: 40px;
        font-weight: 700;
        width: 370px;
        padding-left: 70px;
        font-size: 60px;
        line-height: 60px;
        letter-spacing: 4.5px;
        color: black;
        }
        .time_descr>p
        {   
        width: 370px;
        padding-left: 70px;
        margin-top: 20px;
        color: black;
        }
        a{
        transition: 0.3s;
        }

        .karuseli_aj>a
        {
        text-transform: uppercase;
        letter-spacing: 2.6px;
        text-decoration: none;
        display: block;
        background: white;
        color: black !important;
        margin-top: 66px;
        text-align: center;
        padding: 14px 0px 14px 0px;
        border-radius: 0;
        color: black;
        }
        .karuseli_aj>a:hover
        {
        color: white !important;
        background: black;
        }
        .carusel_image {
            width: 100%;
            height: auto
        }
    </style> 
        </style>
    </head>
    <body>
        <div class="owl-item cloned">
            <div id="myCarousel" class="carousel slide"  >
                <!-- Indicators -->
                
                <!-- Wrapper for slides data-ride="carousel"-->
                <div class="carousel-inner">

                    <div class="item active">
                        <div class="ankap_div container-fluid">
                            
                            <div class="karuseli_aj col-md-12">
                              
                                <div class="time_descr">
                                  <img src="images/4.jpg" class='carusel_image'>
                                </div>
                              
                              
                            </div>
                            
                        </div>
                    </div>

                  <div class="item">
                    <div class="ankap_div">
                  
                        <div class="karuseli_dzax">
                          <h2>Community green learning days education</h2>
                        </div>
                        
                        <div class="karuseli_aj">
                          
                            <div class="time_descr">
                              <time datetime="2012-12-12"><span>01</span>/20</time>
                              <p>Praesent vestibulum aenean nonummy hendrerit mauris cum sociis natoque penatibus et mgnis dis parturient montes ascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio orbi nunc odio gravida at cursus nec luctus a lorem. Maecenas tristique orci ac sem.</p>
                            </div>
                          
                          <a href="#" class="btn">book now!</a>
                        </div>
                        
                      </div>
                  </div>
                
                  <div class="item">
                    <div class="ankap_div">
                  
                        <div class="karuseli_dzax">
                          <h2>Community green learning days education</h2>
                        </div>
                        
                        <div class="karuseli_aj">
                          
                            <div class="time_descr">
                              <time datetime="2012-12-12"><span>01</span>/20</time>
                              <p>Praesent vestibulum aenean nonummy hendrerit mauris cum sociis natoque penatibus et mgnis dis parturient montes ascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio orbi nunc odio gravida at cursus nec luctus a lorem. Maecenas tristique orci ac sem.</p>
                            </div>
                          
                          <a href="#" class="btn">book now!</a>
                        </div>
                        
                      </div>
                  </div>
              
                </div>

                <ol id="carousel-indicators" class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                  <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                </ol>

            </div>
        </div>
    </body>
</html>
