<!doctype html>
<html><head>
    <meta charset="utf-8">
    <title>Covid-19 Data</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Carlos Alvarez - Alvarez.is">

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />

    <link href="css/main.css" rel="stylesheet">
    <link href="css/font-style.css" rel="stylesheet">
    <link href="css/flexslider.css" rel="stylesheet">

    <script type="text/javascript" src="js/jquery.js"></script>    
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="js/lineandbars.js"></script>
    
    <script type="text/javascript" src="js/dash-charts.js"></script>
    <script type="text/javascript" src="js/gauge.js"></script>
    
    <!-- NOTY JAVASCRIPT -->
    <script type="text/javascript" src="js/noty/jquery.noty.js"></script>
    <script type="text/javascript" src="js/noty/layouts/top.js"></script>
    <script type="text/javascript" src="js/noty/layouts/topLeft.js"></script>
    <script type="text/javascript" src="js/noty/layouts/topRight.js"></script>
    <script type="text/javascript" src="js/noty/layouts/topCenter.js"></script>
    
    <!-- You can add more layouts if you want -->
    <script type="text/javascript" src="js/noty/themes/default.js"></script>
    <!-- <script type="text/javascript" src="assets/js/dash-noty.js"></script> This is a Noty bubble when you init the theme-->
    <script type="text/javascript" src="http://code.highcharts.com/highcharts.js"></script>
    <script src="js/jquery.flexslider.js" type="text/javascript"></script>

    <script type="text/javascript" src="js/admin.js"></script>
      
    <style type="text/css">
      body {
        padding-top: 60px;
      }
    </style>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
   

    <!-- Google Fonts call. Font Used Open Sans & Raleway -->
    <link href="http://fonts.googleapis.com/css?family=Raleway:400,300" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">

<script type="text/javascript">
    $(document).ready(function () {

        $("#btn-blog-next").click(function () {
            $('#blogCarousel').carousel('next')
        });
        $("#btn-blog-prev").click(function () {
            $('#blogCarousel').carousel('prev')
        });

        $("#btn-client-next").click(function () {
            $('#clientCarousel').carousel('next')
        });
        $("#btn-client-prev").click(function () {
            $('#clientCarousel').carousel('prev')
        });

    });

    $(window).load(function () {

        $('.flexslider').flexslider({
            animation: "slide",
            slideshow: true,
            start: function (slider) {
                $('body').removeClass('loading');
            }
        });
    });

</script>    
  </head>
  <body>
  
    <!-- NAVIGATION MENU -->

    <div class="navbar-nav navbar-inverse navbar-fixed-top">
        <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- <a class="navbar-brand" href="index.html"><img src="images/logo30.png" alt=""> BLOCKS Dashboard</a> -->
        </div> 
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="/welcome"><i class="icon-home icon-white"></i> Home</a></li>                          
              <li><a href="/provinsi"><i class="icon-th icon-white"></i> Provinsi</a></li>
              <li><a href="/rumahsakit"><i class="icon-lock icon-white"></i> Hospital</a></li>
              <li><a href="/detail"><i class="icon-user icon-white"></i> Data Global</a></li>
              <li><a href="/mapsglobal"><i class="icon-user icon-white"></i> Maps Global</a></li>

            </ul>
          </div><!--/.nav-collapse -->
        </div>
    </div>

    <div class="container">

      <!-- FIRST ROW OF BLOCKS -->     
      <div class="row">

      <!-- USER PROFILE BLOCK -->
        <div class="col-sm-3 col-lg-3">
            <div class="dash-unit">
                <dtitle>User Profile</dtitle>
                <hr>
                <div class="thumbnail">
<!--                     <img src="" alt="Marcel Newman" class="img-circle"> -->
                </div><!-- /thumbnail -->
                <h1>Indonesia (INA)</h1>
                <h3>World, Milkyway</h3>
                <br>
                    <div class="info-user">
                        <span aria-hidden="true" class="li_user fs1"></span>
                        <span aria-hidden="true" class="li_settings fs1"></span>
                        <span aria-hidden="true" class="li_mail fs1"></span>
                        <span aria-hidden="true" class="li_key fs1"></span>
                    </div>
                </div>
        </div>

      <!-- DONUT CHART BLOCK -->
        <div class="col-sm-3 col-lg-3">
            <div class="dash-unit">
                <dtitle>Cases Ina</dtitle>
                <hr>
                <div id="load"></div>
                <h2>  
              {{ $data['total']['positif'] }}
            </div>
        </div>

      <!-- DONUT CHART BLOCK -->
        <div class="col-sm-3 col-lg-3">
            <div class="dash-unit">
                <dtitle>Deaths Ina</dtitle>
                <hr>
                <div id="space"></div>
                <h2>
                                  {{ $data['total']['meninggal'] }}
            </div>
        </div>
        
        <div class="col-sm-3 col-lg-3">

      <!-- LOCAL TIME BLOCK -->
            <div class="half-unit">
                <dtitle>Recovery Ina</dtitle>
                <hr>
                    <div class="clockcenter">
                        <digiclock> {{ $data['total']['sembuh'] }}</digiclock>
                    </div>
            </div>

      <!-- SERVER UPTIME -->
            <div class="half-unit">
                <dtitle>Update Ina</dtitle>
                <hr>
                <div class="cont">
                    <p><img src="images/up.png" alt=""> <bold>Up</bold> | {{ $data['total']['lastUpdate'] }}</p>
                </div>
            </div>

        </div>
      </div><!-- /row -->
      
      
      <!-- SECOND ROW OF BLOCKS -->     
      <div class="row">
        <div class="col-sm-3 col-lg-3">
       <!-- MAIL BLOCK -->
            <div class="dash-unit">
            <dtitle>Contact Covid Global n Ina</dtitle>
            <hr>
            <div class="framemail">
                <div class="window">
                    <ul class="mail">
                        <li>
                            <i class="unread"></i>

                            <p class="sender">Chat Wa Bot Ina</p>
                            <p class="message"><strong><a href="https://api.whatsapp.com/send?phone=6281133399000&text=&source=&data=&app_absent="> https://wa.me/6281133399000</a></strong></p>
                            <div class="actions">
                                <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
                                <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
                                <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a>
                                <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a>
                            </div>
                        </li>
                        <li>
                            <i class="read"></i>

                            <p class="sender">Hotline Gugus Tugas Ina</p>
                            <p class="message"><strong>119</strong></p>
                            <div class="actions">
                                <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
                                <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
                                <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a>
                                <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a>
                            </div>
                        </li>
                        <li>
                            <i class="read"></i>

                            <p class="sender">Web Covid Ina</p>
                            <p class="message"><strong><a href="https://covid19.go.id/"> https://covid19.go.id/</a></strong> </p>
                            <div class="actions">
                                <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
                                <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
                                <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a>
                                <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a>
                            </div>
                        </li>
                        <li>
                            <i class="read"></i>

                            <p class="sender">Web Covid WHO</p>
                            <p class="message"><strong><a href="https://covid19.who.int/"> https://covid19.who.int/</a></strong></p>
                            <div class="actions">
                                <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
                                <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
                                <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a>
                                <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div><!-- /dash-unit -->
    </div><!-- /span3 -->

      <!-- GRAPH CHART - lineandbars.js file -->     
        <div class="col-sm-3 col-lg-3">
            <div class="dash-unit">
            <dtitle>Graphic Global</dtitle>
            <hr>
             <iframe title="" aria-label="Interactive line chart" id="datawrapper-chart-3Wvz8" src="https://datawrapper.dwcdn.net/3Wvz8/4/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="230"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
</script>
            </div>
        </div>

      <!-- LAST MONTH REVENUE -->     
        <div class="col-sm-3 col-lg-3">
            <div class="dash-unit">
                <dtitle>New Case in Today Ina</dtitle>
                <hr>
                <div class="cont">
                    <p><bold> {{ $data['penambahan']['positif'] }}</bold> | <ok>New Cases</ok></p>
                    <br>
                    <p><bold> {{ $data['penambahan']['sembuh'] }}</bold> | Recovery</p>
                    <br>
                    <p><bold> {{ $data['penambahan']['meninggal'] }}</bold> | <bad>Deaths</bad></p>
                    <br>
                    <p><img src="images/up-small.png" alt=""> Update Everyday</p>

                </div>

            </div>
        </div>
        
      <!-- 30 DAYS STATS - CAROUSEL FLEXSLIDER -->     
        <div class="col-sm-3 col-lg-3">
            <div class="dash-unit">
                <dtitle>Last 30 Days Stats</dtitle>
                <hr>
                <br>
                <br>
                <div class="flexslider">
                    <ul class="slides">
                        <li><img src="images/slide01.png" alt="slider"></li>
                        <li><img src="images/slide02.png" alt="slider"></li>
                    </ul>
            </div>
                <div class="cont">
                    <p>StatCounter Information</p>
                </div>   
            </div>
        </div>
      </div><!-- /row -->
     
 
      <!-- THIRD ROW OF BLOCKS -->     
      <div class="row">
        <div class="col-sm-3 col-lg-3">
      
      <!-- BARS CHART - lineandbars.js file -->     
            <div class="half-unit">
                <dtitle>Total Provinci Ina</dtitle>
                <hr>
             <center><h1>34 Provinci</h1></center>
            </div>

      <!-- TO DO LIST -->     
            <div class="half-unit">
                <dtitle>Total Recovery Global</dtitle>
                <hr>
                <div class="cont">
                    <p><bold> {{ $dataw['recovered'] }}</bold> | recovered</p>
                </div>
                     <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%;"><span class="sr-only">60% Complete</span>
                            
                        </div>
                     </div>
            </div>
        </div>

        <div class="col-sm-3 col-lg-3">

      <!-- LIVE VISITORS BLOCK -->     
            <div class="half-unit">
                <dtitle>Spesimen Ina</dtitle>
                <hr>
                <div class="cont">
                <p>Total Spesimen | Spesimen Negatif</p>
                <p><img src="images/up-small.png" alt=""> {{ $data['data']['total_spesimen'] }}. | <img src="images/down-small.png" alt=""> {{ $data['data']['total_spesimen_negatif'] }}</p>
                </div>
            </div>
            
      <!-- PAGE VIEWS BLOCK -->     
            <div class="half-unit">
                <dtitle>Data Global Cases</dtitle>
                <hr>
                <div class="cont">
                <p><bold>{{ $dataw['totalCases'] }}</bold></p>
                <p><img src="images/up-small.png" alt=""> Human</p>
                </div>
            </div>
        </div>

        <div class="col-sm-3 col-lg-3">
      <!-- TOTAL SUBSCRIBERS BLOCK -->     
            <div class="half-unit">
                <dtitle>Total ODP Ina</dtitle>
                <hr>
                <div class="cont">
                <p><bold>{{ $data['data']['odp'] }}</bold></p>
                <p>Update Everiday</p>
                </div>
            </div>
            
      <!-- FOLLOWERS BLOCK -->     
            <div class="half-unit">
                <dtitle>Total Deaths Global</dtitle>
                <hr>
                <div class="cont">
                <p><bold>{{ $dataw['deaths'] }}</bold></p>
                <p>Human</p>
                </div>
            </div>
        </div>

      <!-- LATEST NEWS BLOCK -->     
        <div class="col-sm-3 col-lg-3">
            <div class="dash-unit">
                <dtitle>Pray from Plague</dtitle><hr>
              <!--   <div class="info-user">
                    <span aria-hidden="true" class="li_news fs2"></span>
                </div> --><!-- 
                <br> -->
                <div class="text">
                    <center>للَّهُمَّ إِنِّي أَعُوْذُ بِكَ
                    </center><center>ALLAHUMMA INNII A’UUDZU BIKA</center><center>Ya Allah, aku berlindung kepada-Mu </center>
                    <center>مِنَ الْبَرَصِ وَالْجُنُوْنِ
                    </center><center>MINAL BARASHI WAL JUNUUNI</center><center>dari penyakit belang dan gila</center>
                    <center>وَالْجُذَامِ وَمِنْ سَيِّئِ الْأَسْقَامِ
                    </center><center>WAL JUDZAAMI WA MIN SAYYI-IL ASQOOMI</center><center>dan kusta, dan dari segala penyakit yang buruk/mengerikan lainnya.</center>
                    <p><grey>HR. Abu Dawud</grey></p>
                </div>
            </div>
        </div>
      </div><!-- /row -->
      
      <!-- FOURTH ROW OF BLOCKS -->     
    <div class="row">
    
      <!-- TWITTER WIDGET BLOCK -->     
        <div class="col-sm-3 col-lg-3">
            <div class="dash-unit">
                <dtitle>WHO</dtitle>
                <hr>
                          <center>      <img src="images/whoemblem.png" width="150px" height="150px"></center>
            </div>
        </div>

      <!-- NOTIFICATIONS BLOCK -->     
        <div class="col-sm-3 col-lg-3">
            <div class="dash-unit">
                <dtitle>GUGUS TUGAS</dtitle>
                <hr>
                             <center> <img src="images/ggs.png" width="150px" height="150px"></center>
            </div>
        </div>

      <!-- SWITCHES BLOCK -->     
        <div class="col-sm-3 col-lg-3">
            <div class="dash-unit">
                <dtitle>INDONESIA</dtitle>
                <hr>
                              <center> <img src="images/ina.png" width="150px" height="150px"></center>
            </div>
        </div>

      <!-- GAUGE CHART BLOCK -->     
        <div class="col-sm-3 col-lg-3">
            <div class="dash-unit">
                <dtitle>KRISNA YUDHA A</dtitle>
                <hr>
               <center> <img src="images/krisna.jpg" width="150px" height="150px"></center>
                </div>
        </div>
    
    </div><!--/row -->     
      
      <!-- FOURTH ROW OF BLOCKS -->     
        <div class="row">

      <!-- ACCORDION BLOCK -->     
           <!--  <div class="col-sm-3 col-lg-3">
                <div class="dash-unit">
                <dtitle>Accordion</dtitle>
                <hr>
                    <div class="accordion" id="accordion2">
                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                                Collapsible Group Item #1
                                </a>
                            </div>
                            <div id="collapseOne" class="accordion-body collapse in">
                                <div class="accordion-inner">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla iaculis mattis lorem.                        
                                </div>
                            </div>
                        </div>
        
                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                                Collapsible Group Item #2
                                </a>
                            </div>
                            <div id="collapseTwo" class="accordion-body collapse">
                                <div class="accordion-inner">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla iaculis mattis lorem.                      
                                </div>
                            </div>
                        </div>
        
                         <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
                                Collapsible Group Item #3
                                </a>
                            </div>
                            <div id="collapseThree" class="accordion-body collapse">
                                <div class="accordion-inner">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla iaculis mattis lorem.                        
                                </div>
                            </div>
                        </div>
                    </div> --><!--/accordion -->
             <!--    </div>
            </div>
            
            <div class="col-sm-3 col-lg-3">
 -->
            <!-- LAST USER BLOCK -->     
                <!-- <div class="half-unit">
                <dtitle>Last Registered User</dtitle>
                <hr>
                    <div class="cont2">
                        <img src="images/user-avatar.jpg" alt="">
                        <br>
                        <br>
                        <p>Paul Smith</p>
                        <p><bold>Liverpool, England</bold></p>
                    </div>
                </div>
                 -->
            <!-- MODAL BLOCK -->     
               <!--  <div class="half-unit">
                <dtitle>Modal</dtitle>
                <hr>
                    <div class="cont">
                        <a href="#myModal" role="button" class="btnnew" data-toggle="modal">Example Modal Window</a>
                    </div>
                </div>
            </div> -->
            <!-- Modal -->
              <!-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title">Modal title</h4>
                    </div>
                    <div class="modal-body">
                      ...
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div> --><!-- /.modal-content -->
                <!-- </div> --><!-- /.modal-dialog -->
              <!-- </div> --><!-- /.modal -->
            <!-- FAST CONTACT BLOCK -->     
          <!--   <div class="col-sm-3 col-lg-3">
                <div class="dash-unit">
                <dtitle>Fast Contact</dtitle>
                <hr>
                <div class="cont">
                    <form action="#get-in-touch" method="POST" id="contact">
                        <input type="text" id="contactname" name="contactname" placeholder="Name">
                        <input type="text" id="email" name="email" placeholder="Email">
                        <div class="textarea-container"><textarea id="message" name="message" placeholder="Message"></textarea></div>
                        <input type="submit" id="submit" name="submit" value="Send">
                    </form>
                </div>
                </div>
            </div> -->

            <!-- INFORMATION BLOCK -->     
          <!--   <div class="col-sm-3 col-lg-3">
                <div class="dash-unit">
                <dtitle>Block Dashboard</dtitle>
                <hr>
                <div class="info-user">
                    <span aria-hidden="true" class="li_display fs2"></span>
                </div>
                <br>
                <div class="text">
                <p>Block Dashboard created by Basicoh.</p>
                <p>Special Thanks to Highcharts, Linecons and Bootstrap for their amazing tools.</p>
                </div>

                </div>
            </div>

        </div> --><!--/row -->
     
      
      
    </div> <!-- /container -->
    <div id="footerwrap">
        <footer class="clearfix"></footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-12">
                <p><img src="images/logo.png" alt=""></p>
                <p>Blocks Dashboard Theme - Crafted With Love - Copyright 2020 - Develop by Naato</p>
                </div>

            </div><!-- /row -->
        </div><!-- /container -->       
    </div><!-- /footerwrap -->
          
</body></html>