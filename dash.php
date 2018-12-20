<html>
   <html lang="en">
      <head>
         <link href="https://fonts.googleapis.com/css?family=Lobster|Pacifico|Permanent+Marker|Righteous" rel="stylesheet">
         <meta charset="utf-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
         <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
         <title>KaliHome</title>
         <!-- Add to homescreen for Chrome on Android -->
         <meta name="mobile-web-app-capable" content="yes">
         <!-- Add to homescreen for Safari on iOS -->
         <meta name="apple-mobile-web-app-capable" content="yes">
         <meta name="apple-mobile-web-app-status-bar-style" content="black">
         <meta name="apple-mobile-web-app-title" content="Material Design Lite">
         <link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">
         <!-- Tile icon for Win8 (144x144 + tile color) -->
         <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
         <meta name="msapplication-TileColor" content="#3372DF">
         <link rel="shortcut icon" href="images/bunnybg.jpg">
         <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
         <!--
            <link rel="canonical" href="http://www.example.com/">
            -->
         <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
         <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
         <link rel="stylesheet" href="css/orange.css" />
         <link rel="stylesheet" href="styles.css">
         <style>
            #view-source {
            position: fixed;
            display: block;
            right: 0;
            bottom: 0;
            margin-right: 40px;
            margin-bottom: 40px;
            z-index: 900;
            }
         </style>
      </head>
      <script>
         function startTime() {
           var today = new Date();
           var h = today.getHours();
           var m = today.getMinutes();
           var s = today.getSeconds();
           m = checkTime(m);
           s = checkTime(s);
           document.getElementById('txt').innerHTML =
           h + ":" + m + ":" + s;
           var t = setTimeout(startTime, 500);
         }
         function checkTime(i) {
           if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
           return i;
         }
      </script>
      <body onload="startTime()" bgcolor="black">
         <!--HEADER-->
         <div class="mdl-grid">
            <div class="mdl-layout-spacer"></div>
            <div class="mdl-card-title mdl-cell--3-col mdl-shadow--2dp mdl-cell" style="background-color:#3c3a3f">
               <center>
                  <h1 style="color:white;">
                     <div id="txt"></div>
                  </h1>
               </center>
            </div>
            <div class="mdl-card-title mdl-cell--5-col mdl-shadow--2dp mdl-cell" style="background-color:#3c3a3f">
               <center>
                  <h1 style="color:white;">Kalihome</h1>
               </center>
            </div>
            <div class="mdl-card-title mdl-cell--3-col mdl-shadow--2dp mdl-cell" style="background-color:#3c3a3f">
               <center>
                  <h1 style="color:white;">
                     <?php
                        echo exec("sudo python3 dht.py") . " &deg;F";
                     ?>
                  </h1>
               </center>
            </div>
            <div class="mdl-layout-spacer"></div>
         </div>
         <!--CREATION OF BUTTONS-->
         <main>
            <div class="mdl-grid">
               <!--View 1-->
               <div class="mdl-shadow--2dp mdl-cell" style="background-color:#3c3a3f">
                  <div class="mdl-card-title">
                     <center><iframe src="http://76.106.118.56:443/picture/1/current/" height="240"></iframe></center>
                  </div>
               </div>
               <!-- View 2 -->
               <div class="mdl-shadow--2dp mdl-cell" style="background-color:#3c3a3f">
                  <div class="mdl-card-title">
                     <center><iframe src="http://76.106.118.56:443/picture/2/current/" height="240"></iframe></center>
                  </div>
               </div>
               <!--View -->
               <div class="mdl-shadow--2dp mdl-cell" style="background-color:#3c3a3f">
                  <div class="mdl-card-title">
                     <center><iframe src="http://76.106.118.56:443/picture/3/current/" height="240"></iframe></center>
                  </div>
               </div>
               <!--CARD 1-->
               <div class="mdl-shadow--2dp mdl-cell" style="background-color:#3c3a3f">
                  <div onclick="location.href='http://76.106.118.56:443/';" class="mdl-card-title">
                     <center>
                        <h1></h1>
                        <h2 style="color:rgb(255, 9, 8);">Camera Management System</h2>
                     </center>
                  </div>
               </div>
               <!--CARD 2-->
               <!--<div class="mdl-shadow--2dp mdl-cell" style="background-color:#3c3a3f">
                  <div class="mdl-card-title">
                     <center>
                        <h2 style="color:white;">Cooling Fan</h2>
                     </center>
                  </div>
                  <center>
                     <form method="get" action="gpio8.php">
                        <button type="submit" value="ON" name="on" class="spacebuttons mdl-button mdl-js-button mdl-button--fab mdl-button--colored">
                        <i class="material-icons">power_settings_new</i>
                        </button>
                        <button type="submit" value="OFF" name="off" class="spacebuttons mdl-button mdl-js-button mdl-button--fab mdl-button--colored">
                        <i class="material-icons">power_off</i>
                        </button>
                     </form>
                  </center>
               </div>-->
               <!--CARD 3-->
               <div class="mdl-shadow--2dp mdl-cell" style="background-color:#3c3a3f">
                  <div class="mdl-card-title">
                     <center>
                        <h2 style="color:white;">Main lights</h2>
                     </center>
                  </div>
                  <center>
                     <form method="get" action="gpio3.php">
                        <button type="submit" value="ON" name="on" class="spacebuttons mdl-button mdl-js-button mdl-button--fab mdl-button--colored">
                        <i class="material-icons">power_settings_new</i>
                        </button>
                        <button type="submit" value="OFF" name="off" class="spacebuttons mdl-button mdl-js-button mdl-button--fab mdl-button--colored">
                        <i class="material-icons">power_off</i>
                        </button>
                     </form>
                  </center>
               </div>
               <!--CARD 4-->
               <div class="mdl-shadow--2dp mdl-cell" style="background-color:#3c3a3f">
                  <div class="mdl-card-title">
                     <center>
                        <h2 style="color:white;">Bedroom Lights</h2>
                     </center>
                  </div>
                  <center>
                     <form method="get" action="gpio4.php">
                        <button type="submit" value="ON" name="on" class="spacebuttons mdl-button mdl-js-button mdl-button--fab mdl-button--colored">
                        <i class="material-icons">power_settings_new</i>
                        </button>
                        <button type="submit" value="OFF" name="off" class="spacebuttons mdl-button mdl-js-button mdl-button--fab mdl-button--colored">
                        <i class="material-icons">power_off</i>
                        </button>
                     </form>
                  </center>
               </div>
               <!--CARD 5-->
               <div class="mdl-shadow--2dp mdl-cell" style="background-color:#3c3a3f">
                  <div class="mdl-card-title">
                     <center>
                        <h2 style="color:white;">Below Lights</h2>
                     </center>
                  </div>
                  <center>
                     <form method="get" action="gpio5.php">
                        <button type="submit" value="ON" name="on" class="spacebuttons mdl-button mdl-js-button mdl-button--fab mdl-button--colored">
                        <i class="material-icons">power_settings_new</i>
                        </button>
                        <button type="submit" value="OFF" name="off" class="spacebuttons mdl-button mdl-js-button mdl-button--fab mdl-button--colored">
                        <i class="material-icons">power_off</i>
                        </button>
                     </form>
                  </center>
               </div>
               <!--CARD 6-->
               <div class="mdl-shadow--2dp mdl-cell" style="background-color:#3c3a3f">
                  <div class="mdl-card-title">
                     <center>
                        <h2 style="color:white;">Heat Lamp</h2>
                     </center>
                  </div>
                  <center>
                     <form method="get" action="gpio6.php">
                        <button type="submit" value="ON" name="on" class="spacebuttons mdl-button mdl-js-button mdl-button--fab mdl-button--colored">
                        <i class="material-icons">power_settings_new</i>
                        </button>
                        <button type="submit" value="OFF" name="off" class="spacebuttons mdl-button mdl-js-button mdl-button--fab mdl-button--colored">
                        <i class="material-icons">power_off</i>
                        </button>
                     </form>
                  </center>
               </div>
               <!--CARD 7-->
               <!--<div class="mdl-shadow--2dp mdl-cell" style="background-color:#3c3a3f">
                  <div class="mdl-card-title">
                     <center>
                        <h2 style="color:white;">Front Light</h2>
                     </center>
                  </div>
                  <center>
                     <form method="get" action="gpio1.php">
                        <button type="submit" value="ON" name="on" class="spacebuttons mdl-button mdl-js-button mdl-button--fab mdl-button--colored">
                        <i class="material-icons">power_settings_new</i>
                        </button>
                        <button type="submit" value="OFF" name="off" class="spacebuttons mdl-button mdl-js-button mdl-button--fab mdl-button--colored">
                        <i class="material-icons">power_off</i>
                        </button>
                     </form>
                  </center>
               </div>-->
               <!--CARD 8-->
              <!-- <div class="mdl-shadow--2dp mdl-cell" style="background-color:#3c3a3f">
                  <div class="mdl-card-title">
                     <center>
                        <h2 style="color:white;">Rear Light</h2>
                     </center>
                  </div>
                  <center>
                     <form method="get" action="gpio2.php">
                        <button type="submit" value="ON" name="on" class="spacebuttons mdl-button mdl-js-button mdl-button--fab mdl-button--colored">
                        <i class="material-icons">power_settings_new</i>
                        </button>
                        <button type="submit" value="OFF" name="off" class="spacebuttons mdl-button mdl-js-button mdl-button--fab mdl-button--colored">
                        <i class="material-icons">power_off</i>
                        </button>
                     </form>
                  </center>
               </div>-->
               <!--CARD 9-->
               <!-- <div class="mdl-shadow--2dp mdl-cell" style="background-color:#3c3a3f">
                  <div class="mdl-card-title">
                     <center>
                        <h2 style="color:white;">Misc.</h2>
                     </center>
                  </div>
                  <center>
                     <form method="get" action="gpio7.php">
                        <button type="submit" value="ON" name="on" class="spacebuttons mdl-button mdl-js-button mdl-button--fab mdl-button--colored">
                        <i class="material-icons">power_settings_new</i>
                        </button>
                        <button type="submit" value="OFF" name="off" class="spacebuttons mdl-button mdl-js-button mdl-button--fab mdl-button--colored">
                        <i class="material-icons">power_off</i>
                        </button>
                     </form>
                  </center>
               </div>-->
                <!-- Christmas Lights -->
               <div class="mdl-shadow--2dp mdl-cell--12-col" style="background-color:#83000c">
                  <div class="mdl-card-title">
                     <center>
                        <h2 style="color:green;">Christmas Lights!</h2>
                     </center>
                  </div>
                  <center>
                     <form method="get" action="gpio2.php">
                        <button type="submit" value="ON" name="on" class="spacebuttons mdl-button mdl-js-button mdl-button--fab mdl-button--colored">
                        <i class="material-icons">power_settings_new</i>
                        </button>
                        <button type="submit" value="OFF" name="off" class="spacebuttons mdl-button mdl-js-button mdl-button--fab mdl-button--colored">
                        <i class="material-icons">power_off</i>
                        <button type="submit" value="BLINK" name="blink" class="spacebuttons mdl-button mdl-js-button mdl-button--fab mdl-button--colored">
                        <i class="material-icons">star_half</i>
                        </button>
                        </button>
                     </form>
                  </center>
               </div>
               <p>
               <!-- Made with love -->
               <div class="mdl-shadow--2dp mdl-cell--12-col" style="background-color:#3c3a3f">
                  <div class="mdl-card-title">
                     <center>
                        <h3 style="color:white;">Made with Love for Kali by Jason</h3> 
                     </center>
                  </div>
               </div>
              
         </main>
      </body>
