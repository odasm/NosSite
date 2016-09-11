<?php

include("config.php");
include("connect-to-db.php");
session_start();
session_unset ();
session_destroy();
ob_end_flush ();

?>
<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="de"> <!--<![endif]-->
    <head>
             <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
                <title><?php echo $website_title; ?></title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="description" content="<?php echo $description; ?>" />
        <meta name="author" content="<?php echo $website_title; ?>">
        <meta name="viewport" content="width=device-width,initial-scale=0.7" />
        <meta name="viewport" content="width=device-width,initial-scale=0.7" />
        <link rel="icon" href="//gf3.geo.gfsrv.net/cdn2b/62605064e3da09ffbfa6f086a17eba.ico" type="image/x-icon" />
        <!-- START Web-fonts-->
       <link rel="stylesheet" type='text/css' href="//gf1.geo.gfsrv.net/cdn66/5ec42d576fd0d7bf3468c1ac556306.css" />

        <link href='http://fonts.googleapis.com/css?family=Leckerli+One' rel='stylesheet' type='text/css' />
        <!-- ENDE Web-fonts -->
        
        <link rel='stylesheet' type='text/css' href="//gf1.geo.gfsrv.net/cdnc3/f3f186c1b115533d32747e4493ec0b.css" />
        <link rel='stylesheet' type='text/css' href="//gf3.geo.gfsrv.net/cdn2f/5406da4b98181415e55cb27d36c315.css" media="print" />

   
        <link rel="stylesheet" href="//gf1.geo.gfsrv.net/cdnf9/ac8ed886ee14591a830586b83d3c21.css" />
        <link rel="stylesheet" href="//gf2.geo.gfsrv.net/cdn4e/da8a46a3450f83c3a0cb4d7cdb50cf.css" type="text/css" media="screen" />
              <link rel="stylesheet" href="/css/style.css" />
        <link rel="stylesheet" href="http://de.nostale.gameforge.com/cdn/js/fancybox/source/jquery.fancybox.css" type="text/css" media="screen" />  
       <link rel="stylesheet" href="http://de.nostale.gameforge.com/cdn/css/validationEngine.jquery.css" type="text/css" media="screen" />  

        <!-- All JavaScript at the bottom, except for Modernizr / Respond.
             Modernizr enables HTML5 elements & feature detects; Respond is a polyfill for min/max-width CSS3 Media Queries
             For optimal performance, use a custom Modernizr build: www.modernizr.com/download/ -->
         <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
        <script src="//gf2.geo.gfsrv.net/cdn79/c61759396ec4e3498452b7d3675dff.js"></script>
        <script src="//gf1.geo.gfsrv.net/cdn9e/271eaef64020cb872950465a6ea6c8.js"></script> 

        <script type="text/javascript" src="//gf2.geo.gfsrv.net/cdn4c/c2a9ca8a799483d2b209537cf9e5c8.js"></script>
        <script type="text/javascript" src="//gf2.geo.gfsrv.net/cdn4e/e96670c329a8ddaae6eb8fc790b1c7.js"></script>
        <script type="text/javascript" src="//gf1.geo.gfsrv.net/cdn31/90cbba6394d8eafe990d1a33534740.js"></script>
        <script type="text/javascript" src="//gf2.geo.gfsrv.net/cdn4e/bbb358e044349ec5e85408d7e2b7fc.js?v=2.0.4"></script>
        <script type="text/javascript" src="//gf1.geo.gfsrv.net/cdn04/575c10f775155deac3571dcbb06c28.js"></script>
        <script type="text/javascript" src="//gf2.geo.gfsrv.net/cdn1b/d11ec9bb6fb4bb89a66ab7f8beac5b.js"></script>
        <script type="text/javascript" src="//gf1.geo.gfsrv.net/cdn02/11570fb83d5eb00b07e7c59be4c031.js"></script>
        <script type="text/javascript" src="http://de.nostale.gameforge.com/cdn/js/jquery.validationEngine.rules.php"></script>
        <script type="text/javascript">
</script>          
    </head>
    <body class="de netbar"  > 

        <div id="backgroundWrapper">
            <div id="backgroundHeaderWrapper"><div id="backgroundHeader"></div></div>
            <div id="backgroundFooter"></div>
			            <div id="loginLayer" class="overlay" style="display:none">
                <div class="content_box">
                    <h1>Login</h1>
                    <p>
                        Still no account?                       <a href="/user/register/">
                            Register now                       </a>
                    </p>
                    <form name="loginFormAjax" id="loginFormAjax" action="/user/login/" method="post">
                        <div class="white_box">
                            <img src="//gf3.geo.gfsrv.net/cdnbf/97a8dc1390cdaccf17f30001cc86ab.png" id="loginLayerMascot" alt="" />
                            <div id="loginform" name="loginform">
                                <!-- Class error, wenn es einen fehler gibt -->
<div class="input_wrapper">
    <label for="usernameLogin">Benutzername*:</label>
    <input 
        type="text" 
        class=""
        id="usernameLogin" 
        name="username"
    />
</div>
<div class="input_wrapper">
    <label for="passwordLogin">Passwort*:</label>
    <input 
        type="password"
        class=""
        id="passwordLogin"
        name="password"
        autocomplete="off"
    />
</div>
</div>
                            <input type="submit" value="Anmelden" />  
                           <div class="help_link">
                                <a  href="" class="info_text">
                                    <span class="icon_question_mark"> </span>
                                    Hilfe, ich habe mein Passwort vergessen!                                </a> 
                            </div>
                            <div class="border_bottom help_link">
                                <a href="" class="info_text">
                                    <span class="icon_question_mark"> </span>
                                    Hilfe, ich kann meinen Account nicht aktivieren!                                </a>
                            </div>
                            <p class="info_text">
                                * Diese Felder bitte ausfüllen.                            </p>
                        </div>  
                    </form>

                </div>
            </div>
            <div id="wrapper">
                <header id="header">
				  <h1></h1>
                <header id="header">
                    <h1 id="logo"><a href="" title=""></a></h1>
					<?php if(!isset($_SESSION['username']) || !isset($_SESSION['password'])) { ?>
                    <div id="userLogin">
                        <div id="speechBubble">
                            <div id="speechBubbleArrow"></div>
                            <div class="content">
                                <!-- START User Logged in -->
                                                                                                <!-- START User Log in -->
                                <h1>
                                    Willkommen Fremder!                                </h1>
                                <div class="col_wrapper">
                                    <p class="login">                                
                                        <a href="#loginLayer"  class="fancybox button">
                                            Einloggen                                        </a>
                                    </p>
                                                                        <p class="register_now">
                                        Noch keinen Account?                                        <a href="/user/register/">Jetzt registrieren</a>
                                    </p>
                                                                       <div class="clear"></div>
                                </div> 

                                                                <!-- ENDE User log in -->
                            </div>
                        </div>
                    </div>
					<?php } else { ?>
					<div id="userLogin">
                        <div id="speechBubble">
                            <div id="speechBubbleArrow"></div>
                            <div class="content">
                                 <!-- START User Logged in -->
                                                                
                                <a href="/user/changeaccountimage" id="userImage" >
                                    <img src="/images/profil-images/default.jpg" />
                                </a> 
                                <a id='paymentLayer' href="" target="_mall"><div id="userNosTaler"><span></span>0</div></a>
                                <p id="userName">                            
                                    Hallo, 
                                    <strong onclick="show_user_options();">
                                      <?php echo $_SESSION['username']; ?>                                            <span class="arrow_top_small"> </span>
                                    </strong>
                                </p>
                                <!-- START Hover -->
                                <div id="useroptions">
                                    <nav id="userNav">
                                        <ul>
                                            <li class="last-child"><a href="">Logout</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <!-- ENDE Hover-->
                                <!--ENDE - User Logged in -->
                                                                                                <!-- ENDE User log in -->
                            </div>
                        </div>
                    </div>

					<?php } ?>
                    <nav id="mainNav">

					
					<!-- START NAVIGATION -->
                    	                        <ul>
                            <li id="mainNavNews">
                                <a href="/en/news/index/" title="Startseite" ><span>News</span></a>
                                <!--START  Navigation Aktiv -->
                                <div class="active_wrapper">
                                    <div class="active_content">
                                        <div class="active_fold"></div>
                                        <div class="right_line"></div>
                                        <div class="left_line"></div>
                                        <div class="active_triangle"></div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div id="foldLeft"></div>
                        <div id="foldRight"></div>

                    </nav>
                </header>

                <div id="container">             
                    <div  id="toTop">                    
                        <div class="back_to_top">
                            <a href="javascript:void(0)">
                                <span></span>
                                Nach oben                            </a>
                        </div>
                    </div>
                    <div id="content">
                        <header class="content_header">    
    <h1>Ausloggen</h1>
    <p>
       Du wurdest erfolgreich ausgeloggt.   </p>
</header>
<div class="col_2_wrapper">
    <div class="col_1">
        <div class="content_box">
            <form name="loginForm" id="loginForm" action="/user/login/" method="post">						
                <div class="white_box margin_none">
                    <div id="loginform" name="loginform" class="border_bottom">
                        <!-- Class error, wenn es einen fehler gibt -->
<div class="input_wrapper">
    <label for="usernameLogin">Benutzername*:</label>
    <input 
        type="text" 
        class=""
        id="usernameLogin" 
        name="username"
    />
</div>
<div class="input_wrapper">
    <label for="passwordLogin">Passwort*:</label>
    <input 
        type="password"
        class=""
        id="passwordLogin"
        name="password"
        autocomplete="off"
    />
</div>

<!--
<div class="checkbox_wrapper">    
    <input type="checkbox" id="stayLoggedIn"/> 
    <label for="stayLoggedIn">Angemeldet bleiben</label>
</div>
-->



                    </div>

                    <div class="info_text">
                        <p>Mit dem Login akzeptiere ich die <a rel="nofollow" href="http://agbserver.gameforge.com/deDE-Terms-NosTale.html" target="_blank"><strong>AGB</strong></a>.</p>
                    </div>
                </div>
                <input 
                    id="submitBtn"
                    class="btn-big" 
                    type="submit" 
                    name="SubmitLoginForm"
                    value="Einloggen"					
                    />
            </form>
             <div class="help_link border_top">
                <a  href="" class="info_text">
                    <span class="icon_question_mark"> </span>
                        Hilfe, ich habe mein Passwort vergessen!               </a> 
            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>

                    </div>

<!-- START Footer-->
                    <footer id="footer">
				     <p> <center> <b>In Bearbeitung..</b></center> </p>
                      <!-- <<div>                        
                            <nav class="content_box">
                                <ul id="footer_play_now">
                                    <li>Werde Teil der Legende!</li>
                                    <li class="play_now_footer">
                                        <img src="//gf3.geo.gfsrv.net/cdnb5/7b8db056610f06fadff5681e812dfa.png" />
                                        <a href="http://de.nostale.gameforge.com/main/download" class="button">                    
											<span class="inner">
                                                Download                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            <nav class="content_box">
                                <ul>
                                    <li><a href="http://de.nostale.gameforge.com/news">News</a></li>
                                    	                                		                                		<li><a href="http://de.nostale.gameforge.com/news/index/0">Updates (328)</a></li>
	                                		                                		<li><a href="http://de.nostale.gameforge.com/news/index/1">Shop (47)</a></li>
	                                		                                		<li><a href="http://de.nostale.gameforge.com/news/index/2">Sonstiges (27)</a></li>
	                                		                                		<li><a href="http://de.nostale.gameforge.com/news/index/3">Unkategorisiert (41)</a></li>
	                                		                                		<li><a href="http://de.nostale.gameforge.com/news/index/4">Events (95)</a></li>
	                                		                                		<li><a href="http://de.nostale.gameforge.com/news/index/5">Fanart (77)</a></li>
	                                		                                		<li><a href="http://de.nostale.gameforge.com/news/index/6">Quiz (15)</a></li>
	                                		                                		<li><a href="http://de.nostale.gameforge.com/news/index/7">Fan-Made (41)</a></li>
	                                		                                		<li><a href="http://de.nostale.gameforge.com/news/index/8">Tipps und Tricks (4)</a></li>
	                                		                                                                </ul>
                            </nav>
                            <nav class="content_box">
                                <ul>
                                    <li><a href="http://de.nostale.gameforge.com/eventcalendar">Events</a></li>
                                                                        <li><a href="http://de.nostale.gameforge.com/eventcalendar/index/1/all/1470002400">August (1)</a></li>
                                                                                                            <li><a href="http://de.nostale.gameforge.com/eventcalendar/index/1/all/1472680800">September (1)</a></li>
                                                                                                            <li><a href="http://de.nostale.gameforge.com/eventcalendar/index/1/all/1475272800">Oktober (0)</a></li>
                                                                    </ul>
                            </nav>
                            <nav class="content_box">
                                <ul>
                                    <li><a href="http://de.nostale.gameforge.com/media">Medien</a></li>
                                    <li><a href="http://de.nostale.gameforge.com/media/index">Videos</a></li>
                                    <li><a href="http://de.nostale.gameforge.com/media/artworks">Artworks</a></li>
                                    <li><a href="http://de.nostale.gameforge.com/media/wallpapers">Wallpaper</a></li>
                                    <li><a href="http://de.nostale.gameforge.com/media/screenshots">Screenshots</a></li>
                                    <li><a href="http://de.nostale.gameforge.com/media/comics">FanArt</a></li>
                                </ul>
                            </nav>
                            <nav class="content_box">
                                <ul>
                                    <li><a href="http://de.nostale.gameforge.com/game">Das Spiel</a></li>
                                    <li><a href="http://de.nostale.gameforge.com/game/about_details">Was ist NosTale?</a></li>
                                    <li><a href="http://de.nostale.gameforge.com/game">Tipps</a></li>
                                    <li><a href="http://de.nostale.gameforge.com/game/npc">NosTales Einwohner</a></li>
                                    <li><a href="http://de.nostale.gameforge.com/game/charakter_classes/">Charakterklassen</a></li>
                                    <li><a href="http://de.nostale.gameforge.com/game/glossary">Glossar</a></li>
                                    <li><a href="http://de.nostale.gameforge.com/game/faq">FAQ - Häufige Fragen</a></li>
                                    <li><a href="http://support.de.nostale.gameforge.com/">Support</a></li>
                                </ul>
                            </nav>
                            <div class="clear"></div>
                        </div> -->
                        <div id="footer_legal">
                        	<p id="gf_logo">
                        		<a href='http://www.elitepvpers.com/forum/members/6663195-shido-.html' target='_blank'><img src="/images/edit.gif" /></a>
                        	</p>
                            <p>
                                © 2007 Entwell Co., Ltd. Veröffentlicht von der Gameforge 4D GmbH. <br />
Alle Rechte vorbehalten. Die Rechte an allen Marken liegen bei ihrem jeweiligen Inhaber.                            </p>
                            <p>                            
                                <a href="">Impressum</a> - <a href="http://www.elitepvpers.com/forum/nostale/">Elitepvpers</a>
                            </p>
                            <div id="legal_icons">
                            	                            	<a href="http://corporate.gameforge.com/produkte/safe-play/" target="_safeplay">
                            	                            		<span id="safe_play"></span>
                            	</a>
                                                                    <span id="usk_12"></span>
                                                                                                    <a href="http://www.pegi.info/de/index" target="_pegi">
                                                                <img src="//gf1.geo.gfsrv.net/cdn0b/044c20415e2285e7391687e4d00d53.jpg"  height="60px" id="pegi"/>
                                </a>
                            </div>
                        </div>
                    </footer>
                    <!-- ENDE Footer-->
                </div>
            </div> 
        </div> 
         
        <!-- JavaScript at the bottom for fast page loading -->

        <!-- CHECK UNSUPPORTED BROWSER -->
		<input type="hidden" id="unsupported" value="Du benutzt einen veralteten Browser. Um diese Seite korrekt anzuzeigen benutze <a href='http://getfirefox.com'>FireFox</a>, <a href='http://www.google.com/chrome/intl/de/landing_win.html?hl=de/'>Chrome</a>, <a href='http://www.apple.com/safari/'>Safari</a> oder <a href='http://www.microsoft.com/windows/downloads/ie/getitnow.mspx'>Internet Explorer 8</a>. Danke!">
		<script type="text/javascript">
		 checkBrowser(document.getElementById('unsupported').value);  
		</script>
		<!-- END : CHECK UNSUPPORTED BROWSER  -->
        
        <script type="text/javascript">
            
            jQuery(document).ready(function(){
                 
                $("select").select_skin();
                
                $(".size-thumbnail").parent().addClass('fancybox');
                
                $(".fancybox").fancybox({topRatio:0.5 });
                
                $('.fancybox-shipping').fancybox({
                    wrapCSS : 'shipping_form',
                    topRatio : 0.5,
                        openSpeed : 'fast',
                        closeSpeed : 'fast'
                });
                
                $("#paymentLayer").fancybox({
                  'type': 'iframe' // see this?
                });  
                
                       $("#shopLayer2").fancybox({
                          'width': 1016, //or whatever
                          'height': 657,
                          'type': 'iframe'
                        })
                
            }); 
            
            function showShop(){    
              $.fancybox.showLoading();
              
              
              $.post('/ajax/user/getShopLink', {},
              
                function(data) { 
       
                      if (data != '0') { 
                       
                        $('#shopLayer2').attr('href', data);  
                        $('#shopLayer2').attr('type', 'iframe');  
                        $("#shopLayer2").click();
                        }                                
             
                  else
                  {      
                        
                    document.location.href = "/user/login";
                  }
                }
              );
            }
                    function checkLogin() {
                          $.post('/user/ajaxcheckforlogin', {},
                            function(data) { 
                              if (data == true) {
                                return true;
                              }
                              else
                              {      
                                document.location.href = "/user/login";
                              }
                            }
                        ); //postCheckLogin
                      } //checkLogin
                      
//                    function getShopLink() {
//                        
//                      var url = "";
//                      $.post(url, function(data) {
//
//                        if (data != '0') {
//  
//                          $('#shopLayer2').attr('href', data); 
//                          $("#shopLayer2").fancybox({
//
//                         });
//                       
//                            return true;
//                                               
//                           }
//                           else
//                           {
//   
//                              return false;
//                           }
//
//                          }); //post
//
//                        }; //getShopLink
            function ajaxlogin()
            {
              var url = "http://de.nostale.gameforge.com/ajax/user/login2";
              var json = null;        
              $.post(url, $("#loginFormAjax").serialize(),
              function(data) {
                try
                {  
                  //gueltiges JSON?  
                  json = jQuery.parseJSON(data);  
                  if(json.transfer)
                  {
                    // check for external link, if there is "http" in the url, the user should be send to an external link:
                    result = json.view.search(/http/);
                    if(result != -1) {
                    	document.location.href = json.view;
                    } else {
                    	document.location.href = "http://de.nostale.gameforge.com/"+json.view; 
                    }
                  }
                }
                catch(e)
                {
                  result = data.search(/<html/); // search for the html-tag
                  if(result != -1) { // if there is an html-tag, this isn't the login-view and you should redirect to the mainpage
                  	document.location.href = "http://de.nostale.gameforge.com/";
                  } else {
                  	$('#loginFormAjax').html(data);
                  }
                } 
              });
            }
        </script>
        
         
        <!-- end scripts-->
        <div style="display: none;">
                                        <!-- GFAnalytics -->


<script type="text/javascript" src="http://pixelzirkus.gameforge.com/functions.js"></script>
<script type="text/javascript">
setPixel ({
'location':'VISIT',
'product':'nostale',
'language':'de',
'server-id':'1'
});
</script>
<!-- /GFAnalytics -->
                                            </div>
    
<!-- #MMO:NETBAR# -->
<div id="pagefoldtarget"></div>
<script type="text/javascript">
    var mmoCSS = ' body {margin:0; padding:0;} div.openX_interstitial div.openX_int_closeButton a { text-indent:-4000px; float:right; height:23px; width:23px; display:block; background:transparent url(//gf2.geo.gfsrv.net/cdn14/7618d1159940178a2e53a8be22710a.png) repeat-x; } #mmonetbar { background:transparent url(//gf2.geo.gfsrv.net/cdn47/b6b2ff5467c4d7af175bc42f7208a5.png) repeat-x; font:normal 11px Tahoma, Arial, Helvetica, sans-serif; height:32px; left:0; padding:0; position:absolute; text-align:center; top:0; width:100%; z-index:3000; } #mmonetbar #mmoContent { height:32px; margin:0 auto; width:1024px; position: relative; } #mmonetbar .mmosmallbar {width:585px !important;} #mmonetbar .mmosmallbar div.mmoBoxMiddle { width: 290px; } #mmonetbar .mmonewsout {width:800px !important;} #mmonetbar .mmouseronlineout {width:768px !important;} #mmonetbar .mmolangout {width:380px !important;} #mmonetbar .mmolangout .mmoGame { width: 265px; } #mmonetbar #mmoContent.mmoingame { width: 533px; } #mmonetbar #mmoContent.mmoingame .mmoGame { width: auto; } #mmonetbar a { color:#666; font:normal 11px Tahoma, Arial, Helvetica, sans-serif; outline: none; text-decoration:none; white-space:nowrap; } #mmonetbar select { background-color:#287bbb !important; border:1px solid #18649e !important; color:#ffffff !important; font:normal 11px Verdana, Arial, Helvetica, sans-serif; height:18px; margin-top:3px; width:100px; } #mmonetbar .mmoGames select {width:80px;} #mmonetbar option { background-color:#287bbb !important; color:#ffffff !important; } #mmonetbar option:hover { background-color:#1e70b0 !important; } #mmonetbar select#mmoCountry {width:120px;} #mmonetbar .mmoSelectbox { background-color:#287bbb; float:left; margin:3px 0 0 3px; position:relative; } * html #mmonetbar .mmoSelectbox {position:static;} *+html #mmonetbar .mmoSelectbox {position:static;} #mmonetbar #mmoOneGame {cursor:default; height:14px; margin-top:3px; padding-left:5px; width:80px;} #mmonetbar .label {float:left; font-weight:bold; margin-right:4px; overflow:hidden !important;} #mmonetbar #mmoUsers .label {font-size:10px;} #mmonetbar .mmoBoxLeft, #mmonetbar .mmoBoxRight { background:transparent url(//gf1.geo.gfsrv.net/cdn64/13bb8cf4df395c6039daa221504520.png) no-repeat -109px -4px; float:left; width:5px; height:24px; } #mmonetbar .mmoBoxRight {background-position:-126px -4px;} #mmonetbar .mmoBoxMiddle { background:transparent url(//gf2.geo.gfsrv.net/cdn47/b6b2ff5467c4d7af175bc42f7208a5.png) repeat-x 0 -36px; color:#ffffff !important; float:left; height:24px; line-height:22px; text-align:left; white-space:nowrap; position: relative; z-index: 10000; } #mmonetbar #mmoGames, #mmonetbar #mmoLangs {margin:0px 4px 0 0;} #mmonetbar #mmoNews, #mmonetbar #mmoUsers, #mmonetbar #mmoGame, #mmonetbar .nojsGame {margin:4px 4px 0 0;} #mmonetbar #mmoLogo { background:transparent url(//gf1.geo.gfsrv.net/cdn64/13bb8cf4df395c6039daa221504520.png) no-repeat top left; float:left; display:block; height:32px; width:108px; text-indent: -9999px; position: relative; z-index: 1 } #mmonetbar #mmoNews {float:left; width:252px;} #mmonetbar #mmoNews #mmoNewsContent {text-align:left; width:200px;} #mmonetbar #mmoNews #mmoNewsticker {overflow:hidden; width:240px;} #mmonetbar #mmoNews #mmoNewsticker ul { margin: 0; padding: 0; list-style: none; } #mmonetbar #mmoNews #mmoNewsticker ul li { font:normal 11px/22px Tahoma, Arial, Helvetica, sans-serif !important; color:#ffffff !important; padding: 0; margin: 0; background: none; display: none; } #mmonetbar #mmoNews #mmoNewsticker ul li.mmoTickShow { display: block; } #mmonetbar #mmoNews #mmoNewsticker ul li a img {border:0;} #mmonetbar #mmoNews #mmoNewsticker ul li a {color:#ffffff !important;display:block;height:24px;line-height:23px;} #mmonetbar #mmoNews #mmoNewsticker ul li a:hover {text-decoration:underline;} #mmonetbar #mmoUsers {float:left; width:178px;} #mmonetbar #mmoUsers .mmoBoxLeft {width:17px;} #mmonetbar #mmoUsers .mmoBoxMiddle {padding-left:3px; width:150px;} #mmonetbar .mmoGame {display:none; float:left; width:432px;} #mmonetbar .mmoGame #mmoGames {float:left; width:206px;} #mmonetbar .mmoGame #mmoLangs {float:left; margin:0; width:252px;} #mmonetbar .mmoGame label { color:#ffffff !important; float:left; font-weight:400 !important; line-height:22px; margin:0px; text-align:right !important; width:110px; font-size: 11px !important; } #mmonetbar .nojsGame {display:block; width:470px;} #mmonetbar .nojsGame .mmoBoxMiddle {width:450px;} #mmonetbar .nojsGame .mmoSelectbox {margin:0px 0 0 3px;} *+html #mmonetbar .nojsGame .mmoSelectbox {margin:2px 0 0 3px;} * html #mmonetbar .nojsGame .mmoSelectbox {margin:2px 0 0 3px;} #mmonetbar .nojsGame .mmoGameBtn { background:transparent url(//gf1.geo.gfsrv.net/cdn64/13bb8cf4df395c6039daa221504520.png) no-repeat -162px -7px; border:none; cursor:pointer; float:left; height:18px; margin:3px 0 0 7px; padding:0; width:18px; } #mmonetbar .mmoSelectArea { border:1px solid #18649e; color:#ffffff !important; display:block !important; float:none; font-weight:400 !important; font-size:11px; height:16px; line-height:13px; -moz-box-sizing: content-box; overflow:hidden !important; width:90px; } #mmonetbar #mmoLangSelect .mmoSelectArea {width:129px;} #mmonetbar #mmoLangSelect .mmoOptionsDivVisible {min-width:129px;} #mmonetbar .mmoSelectArea .mmoSelectButton { background: url(//gf1.geo.gfsrv.net/cdn64/13bb8cf4df395c6039daa221504520.png) no-repeat -141px -8px; float:right; width:17px; height:16px; } #mmonetbar .mmoSelectText {cursor:pointer; float:left; overflow:hidden; padding:1px 2px; width:68px;} #mmonetbar #mmoLangSelect .mmoSelectText {width:107px;} #mmonetbar #mmoOneLang {cursor:default; height:14px;} #mmonetbar div.mmoOneLang { background: none; } #mmonetbar div.mmoOneLang #mmoOneLang { border: none; padding: 2px 3px; } #mmonetbar .mmoOptionsDivInvisible, #mmonetbar .mmoOptionsDivVisible { background-color: #287bbb !important; border: 1px solid #18649e; position: absolute; min-width:90px; z-index: 3100; } * html #mmonetbar .mmoOptionsDivVisible .highlight {background-color:#1e70b0 !important} #mmonetbar .mmoOptionsDivInvisible {display: none;} #mmonetbar .mmoOptionsDivVisible ul { border:0; font:normal 11px Tahoma, Arial, Helvetica, sans-serif; list-style: none; margin:0; padding:2px; overflow:auto; overflow-x:hidden; } #mmonetbar #mmoLangs .mmoOptionsDivVisible ul {min-width:125px;} #mmonetbar .mmoOptionsDivVisible ul li { background-color: #287bbb; height:14px; padding:2px 0; } #mmonetbar .mmoOptionsDivVisible a { color: #ffffff !important; display: block; font-weight:400 !important; height:16px !important; min-width:80px; text-decoration: none; white-space:nowrap; width:100%; } #mmonetbar #mmoContent .mmoLangList a {min-width:102px;} #mmonetbar .mmoOptionsDivVisible li:hover {background-color: #1e70b0;} #mmonetbar .mmoOptionsDivVisible li a:hover {color: #ffffff !important;} #mmonetbar .mmoOptionsDivVisible li.mmoActive {background-color: #1e70b0 !important;} #mmonetbar .mmoOptionsDivVisible li.mmoActive a {color: #ffffff !important;} #mmonetbar .mmoOptionsDivVisible ul.mmoListHeight {height:240px} #mmonetbar .mmoOptionsDivVisible ul.mmoLangList.mmoListHeight li {padding-right:15px !important; width:100%;} #mmonetbar #mmoGameSelect ul.mmoListHeight a {min-width:85px;} #mmonetbar #mmoLangSelect ul.mmoListHeight a {min-width:105px;} #mmonetbar #mmoFocus {position:absolute;left:-2000px;top:-2000px;} #mmonetbar #mmoLangs .mmoSelectText span, #mmonetbar #mmoLangs .mmoflag { background: transparent url(//gf3.geo.gfsrv.net/cdn28/0fa15cfe12b31b8e79f9598f106bfd.png) no-repeat; height:14px !important; padding-left:23px; } .mmo_AE {background-position:left 0px !important} .mmo_AR {background-position:left -14px !important} .mmo_BE {background-position:left -28px !important} .mmo_BG {background-position:left -42px !important} .mmo_BR {background-position:left -56px !important} .mmo_BY {background-position:left -70px !important} .mmo_CA {background-position:left -84px !important} .mmo_CH {background-position:left -98px !important} .mmo_CL {background-position:left -112px !important} .mmo_CN {background-position:left -126px !important} .mmo_CO {background-position:left -140px !important} .mmo_CZ {background-position:left -154px !important} .mmo_DE {background-position:left -168px !important} .mmo_DK {background-position:left -182px !important} .mmo_EE {background-position:left -196px !important} .mmo_EG {background-position:left -210px !important} .mmo_EN {background-position:left -224px !important} .mmo_ES {background-position:left -238px !important} .mmo_EU {background-position:left -252px !important} .mmo_FI {background-position:left -266px !important} .mmo_FR {background-position:left -280px !important} .mmo_GR {background-position:left -294px !important} .mmo_HK {background-position:left -308px !important} .mmo_HR {background-position:left -322px !important} .mmo_HU {background-position:left -336px !important} .mmo_ID {background-position:left -350px !important} .mmo_IL {background-position:left -364px !important} .mmo_IN {background-position:left -378px !important} .mmo_INTL {background-position:left -392px !important} .mmo_IR {background-position:left -406px !important} .mmo_IT {background-position:left -420px !important} .mmo_JP {background-position:left -434px !important} .mmo_KE {background-position:left -448px !important} .mmo_KR {background-position:left -462px !important} .mmo_LT {background-position:left -476px !important} .mmo_LV {background-position:left -490px !important} .mmo_ME {background-position:left -504px !important} .mmo_MK {background-position:left -518px !important} .mmo_MX {background-position:left -532px !important} .mmo_NL {background-position:left -546px !important} .mmo_NO {background-position:left -560px !important} .mmo_PE {background-position:left -574px !important} .mmo_PH {background-position:left -588px !important} .mmo_PK {background-position:left -602px !important} .mmo_PL {background-position:left -616px !important} .mmo_PT {background-position:left -630px !important} .mmo_RO {background-position:left -644px !important} .mmo_RS {background-position:left -658px !important} .mmo_RU {background-position:left -672px !important} .mmo_SE {background-position:left -686px !important} .mmo_SI {background-position:left -700px !important} .mmo_SK {background-position:left -714px !important} .mmo_TH {background-position:left -728px !important} .mmo_TR {background-position:left -742px !important} .mmo_TW {background-position:left -756px !important} .mmo_UA {background-position:left -770px !important} .mmo_UK {background-position:left -784px !important} .mmo_US {background-position:left -798px !important} .mmo_VE {background-position:left -812px !important} .mmo_VN {background-position:left -826px !important} .mmo_YU {background-position:left -840px !important} .mmo_ZA {background-position:left -854px !important} .mmo_WW {background-position:left -392px !important} .mmo_AU {background-position:left -868px !important} div#mmonetbar a:active { top: 0; } div#mmoGamesOverviewPanel { width: 582px; position: absolute; top: 0; right: 0; font: 12px Arial, sans-serif; } div#mmoGamesOverviewPanel h4, div#mmoGamesOverviewPanel h5 { margin: 0; font-size: 12px; font-weight: bold; text-align: left; } div#mmoGamesOverviewPanel a { text-decoration: none; } div#mmoGamesOverviewPanel a img { border: none; } div#mmoGamesOverviewToggle { width: 168px; padding: 4px 0 4px 414px; } div#mmoGamesOverviewToggle h4 { height: 18px; position: relative; background: url(//gf2.geo.gfsrv.net/cdn47/b6b2ff5467c4d7af175bc42f7208a5.png) repeat-x 0 -36px; top: 0px; padding: 3px 20px; -moz-box-sizing: content-box; } div#mmoGamesOverviewToggle h4 a { display: block; width: 116px; height: 16px; line-height: 14px; text-align: left; font-weight: normal; outline: none; color: #ffffff !important; font-size: 11px !important; position: relative; border: 1px solid #18649e; padding: 0 0 0 10px; background: #287bbb; -moz-box-sizing: content-box; } div#mmoGamesOverviewToggle h4 a.gameCountZero { cursor: default; text-align: center; padding: 0; width: 126px; } div#mmoGamesOverviewToggle h4 a span.mmoNbPseudoSelect_icon { display: block; position: absolute; top: 0; right: 0; width: 17px; height: 16px; background: url(//gf1.geo.gfsrv.net/cdn64/13bb8cf4df395c6039daa221504520.png) no-repeat -141px -8px; } span.iconTriangle { display: block; position: absolute; top: 5px; right: 10px; width: 0px; border: 5px solid transparent; border-bottom-color: #ffffff; } div#mmoGamesOverviewToggle h4 a.toggleHidden { } div#mmoGamesOverviewToggle h4 a.toggleHidden span.iconTriangle { top: 10px; border: 5px solid transparent; border-top-color: #ffffff; } div#mmoGamesOverviewToggle h4 span.mmoNbBoxEdge { display: block; width: 5px; height: 24px; background: url(//gf1.geo.gfsrv.net/cdn64/13bb8cf4df395c6039daa221504520.png) no-repeat -109px -4px; position: absolute; top: 0; } div#mmoGamesOverviewToggle h4 span.mmoNbBoxEdge_left { left: 0; } div#mmoGamesOverviewToggle h4 span.mmoNbBoxEdge_right { right: 0; background-position: -126px -4px; } div#mmoGamesOverviewLists { clear: both; background: #287bbb; width: 580px; border: 1px solid #18649e; float: left; position: relative; top: 0px; -moz-box-sizing: content-box; } div#mmoGamesOverviewLists h5 { clear: both; width: 544px; margin: 0; padding: 0 18px; height: 27px; line-height: 27px; color: #ffffff; border-bottom: 1px solid #18649e; background: url(//gf2.geo.gfsrv.net/cdn47/b6b2ff5467c4d7af175bc42f7208a5.png) repeat-x 0 -3px; font-family: inherit; -moz-box-sizing: content-box; } #mmoGamesOverviewLists #mmoGamesOverview_featured li { width: auto; } #mmoGamesOverviewLists #mmoGamesOverview_featured span { display: block; width: 560px; height: 180px; margin: 0; } #mmoGamesOverviewLists #mmoGamesOverview_featured span.gameName { display: none; } #mmoGamesOverview_featured img { display: block; } div#mmoGamesOverviewLists ul { margin: 0; padding: 5px 5px; list-style: none; width: 570px; float: left; text-align: left; -moz-box-sizing: content-box; } div#mmoGamesOverviewLists ul li { margin: 0; padding: 0; list-style: none; width: 190px; float: left; background: none; } div#mmoGamesOverviewLists ul li a { display: block; padding: 5px; font-weight: bold; line-height: 1; color: #ffffff !important; font-size: 11px !important; } div#mmoGamesOverviewLists ul li a:focus, div#mmoGamesOverviewLists ul li a:hover { background-color: #1e70b0; } div#mmoGamesOverviewLists ul li a span.gameImgTarget { display: block; width: 180px; height: 90px; background: none; margin: 0 0 4px 0; } div#mmoGamesOverviewLists ul li a span img { display: block; } div#mmoGamesOverviewLists div#mmoGamesOverviewCountry { width: 20px; height: 14px; position: absolute; top: 6px; right: 12px; background-image: url(//gf3.geo.gfsrv.net/cdn28/0fa15cfe12b31b8e79f9598f106bfd.png); background-repeat: no-repeat; } #mmonetbar div.nojsGame { width: 432px !important; } #mmonetbar div.nojsGame div.mmoBoxMiddle { width: 422px; } #mmonetbar div.nojsGame label { width: 105px; } #pagefoldtarget .nbPF { position: absolute; top: 0; z-index: 999999; text-indent: -9999px; width: 125px; height: 120px; } #pagefoldtarget .nbPFLeft { left: 0px; } #pagefoldtarget .nbPF.nbPFRight { right: 0px; background-position: right 0px } #pagefoldtarget .nbPFDark.nbPFRight { background-image: url(//gf1.geo.gfsrv.net/cdn37/45cd40084fbd85deb0bbd141a182d4.png); _background-image: url(//gf3.geo.gfsrv.net/cdn21/2ac8c866dd437d374bddae90352182.gif); } #pagefoldtarget .nbPFDark.nbPFLeft { background-image: url(//gf2.geo.gfsrv.net/cdn7a/ac8b49aea9f6640b9c2aa05826cf7e.png); _background-image: url(//gf3.geo.gfsrv.net/cdnb1/0d6041fc3b795c456c06798d691c0a.gif); } #pagefoldtarget .nbPFLight.nbPFRight { background-image: url(//gf3.geo.gfsrv.net/cdn27/6af7f589ac3e8285f4dbe8d6016068.png); _background-image: url(//gf2.geo.gfsrv.net/cdn14/c6c431101736ce8fe2fc7066deda22.gif); } #pagefoldtarget .nbPFLight.nbPFLeft { background: url(//gf2.geo.gfsrv.net/cdn74/8b1d6e7fe60aa56ad56a9ef6ca670d.png) no-repeat; _background-image: url(//gf2.geo.gfsrv.net/cdn73/0f237da9ad7d278f76da13604d9626.gif); } #pagefoldtarget .nbPF a{ text-indent: -9999px; display: block; width: 110px; height: 95px; } #pagefoldtarget .nbPF.nbPFRight a{ float:right; } #pagefoldtarget .nbPF.nbPFHover a{ width:358px; height: 320px; } #pagefoldtarget .nbPF.nbPFHover { background-position: left -129px !important; width:400px; height: 400px; } #pagefoldtarget .nbPF.nbPFRight.nbPFHover { background-position: right -129px !important; } ';
    var mmostyle = document.createElement('style');
    if (navigator.appName == "Microsoft Internet Explorer") {
        mmostyle.setAttribute("type", "text/css");
        mmostyle.styleSheet.cssText = mmoCSS;
    } else {
        var mmostyleTxt = document.createTextNode(mmoCSS);
        mmostyle.type = 'text/css';
        mmostyle.appendChild(mmostyleTxt);
    }
    document.getElementsByTagName('head')[0].appendChild(mmostyle);
</script>

<noscript>
<style type="text/css">
 body {margin:0; padding:0;} #mmonetbar { background:transparent url(//gf2.geo.gfsrv.net/cdn47/b6b2ff5467c4d7af175bc42f7208a5.png) repeat-x; font:normal 11px Tahoma, Arial, Helvetica, sans-serif; height:32px; left:0; padding:0; position:absolute; text-align:center; top:0; width:100%; z-index:3000; } #mmonetbar #mmoContent { height:32px; margin:0 auto; width:1024px; position: relative; } #mmonetbar #mmoLogo { background:transparent url(//gf1.geo.gfsrv.net/cdn64/13bb8cf4df395c6039daa221504520.png) no-repeat top left; float:left; display:block; height:32px; width:108px; text-indent: -9999px; } #mmonetbar #mmoNews, #mmonetbar #mmoGame, #mmonetbar #mmoFocus, #pagefoldtarget { display:none !important; } 
</style>
</noscript>

<!-- Start Alexa Certify Javascript -->
<script type="text/javascript">
_atrk_opts = { atrk_acct: 'Ezuyi1a8Dy00aI', domain: 'gameforge.com', dynamic: true };
(function() {
	var as = document.createElement('script');
	as.type = 'text/javascript';
	as.async = true;
	as.src = 'https://d31qbv1cthcecs.cloudfront.net/atrk.js';
	var s = document.getElementsByTagName('script')[0];
	s.parentNode.insertBefore(as, s);
})();
</script>
<noscript><img src="https://d5nxst8fruw4z.cloudfront.net/atrk.gif?account=Ezuyi1a8Dy00aI" style="display:none" height="1" width="1" alt="" /></noscript>
<!-- End Alexa Certify Javascript -->

<div id="mmonetbar" class="mmonostale">
    <script type="text/javascript">
function mmoEl(name){if(document.getElementById){return document.getElementById(name);}
else if(document.all){return document.all[name];}
else if(document.layers){return document.layers[name];}
return false;}
function mmoJump(el){window.location.href=el.options[el.selectedIndex].value;}
var mmo_tickDly=3000;var mmo_tickFadeDly=50;var mmo_tickFadeTicks=10;var mmoTickEl=null;var mmoTickItems=null;var mmoTickIdx=0;var mmoTickState=0;var mmoTickFade=1;var mmoTickHalt=false;function mmoTicker(){var f=0;try{mmoTickEl=mmoEl('mmoNewsticker');if(mmoTickEl){mmoTickItems=mmoTickEl.getElementsByTagName("li");if(mmoTickItems){f=1;}}}catch(e){f=0;}
if(!f){setTimeout(mmoTicker,10);return;}
setTimeout(mmoTicknext,0);}
function mmoTicknext(){if(mmoTickHalt){mmoTickAlphaFor(mmoTickEl,100);setTimeout(mmoTicknext,500);return;}
if(mmoTickState==0){mmoTickFade=mmoTickFade-1;mmoTickAlpha();if(mmoTickFade<=0){mmoTickState=1;setTimeout(mmoTicknext,0);return;}
setTimeout(mmoTicknext,mmo_tickFadeDly);return;}
if(mmoTickState==1){mmoTickItems[mmoTickIdx].className="";mmoTickIdx++;if(mmoTickIdx>=mmoTickItems.length)mmoTickIdx=0;mmoTickItems[mmoTickIdx].className="mmoTickShow";setTimeout(mmoTicknext,mmo_tickFadeDly);mmoTickState=2;return;}
if(mmoTickState==2){mmoTickFade=mmoTickFade+1;mmoTickAlpha();if(mmoTickFade>=mmo_tickFadeTicks){if(mmoTickItems.length<2)return;mmoTickState=0;setTimeout(mmoTicknext,mmo_tickDly);return;}
setTimeout(mmoTicknext,mmo_tickFadeDly);return;}}
function mmoTickAlpha(){var a=(100/mmo_tickFadeTicks)*mmoTickFade;mmoTickAlphaFor(mmoTickEl,a);}
function mmoTickAlphaFor(el,a){el.style.filter='Alpha(opacity='+a+')';el.style.opacity=a/100;el.style.MozOpacity=a/100;el.style.KhtmlOpacity=a/100;}
var mmoActive_select=null;function mmoInitSelect(){if(!document.getElementById)return false;document.getElementById('mmonetbar').style.display='block';document.getElementById('mmoGame').style.display='block';document.getElementById('mmoFocus').onkeyup=function(e){mmo_selid=mmoActive_select.id.replace('mmoOptionsDiv','');var e=e||window.event;if(e.keyCode)var thecode=e.keyCode;else if(e.which)var thecode=e.which;mmoSelectMe(mmo_selid,thecode);}}
function mmoSelectMe(selid,thecode){var mmolist=document.getElementById('mmoList'+selid);var mmoitems=mmolist.getElementsByTagName('li');switch(thecode){case 13:mmoShowOptions(selid);window.location=mmoActive_select.url;break;case 38:mmoActive_select.activeit.className='';var minus=((mmoActive_select.activeid-1)<=0)?'0':(mmoActive_select.activeid-1);mmoActive_select=mmoSetActive(selid,minus);break;case 40:mmoActive_select.activeit.className='';var plus=((mmoActive_select.activeid+1)>=mmoitems.length)?(mmoitems.length-1):(mmoActive_select.activeid+1);mmoActive_select=mmoSetActive(selid,plus);break;default:thecode=String.fromCharCode(thecode);var found=false;for(var i=0;i<mmoitems.length;i++){var _a=mmoitems[i].getElementsByTagName('a');if(navigator.appName.indexOf("Explorer")>-1){}
else{txtContent=_a[0].textContent;}
if(!found&&(thecode.toLowerCase()==txtContent.charAt(0).toLowerCase())){mmoActive_select.activeit.className='';mmoActive_select=mmoSetActive(selid,i);found=true;}}
break;}}
function mmoSetActive(selid,itemid){mmoActive_select=null;var mmolist=document.getElementById('mmoList'+selid);var mmoitems=mmolist.getElementsByTagName('li');mmoActive_select=document.getElementById('mmoOptionsDiv'+selid);;mmoActive_select.selid=selid;if(itemid!=undefined){var _a=mmoitems[itemid].getElementsByTagName('a');var textVar=document.getElementById("mmoMySelectText"+selid);textVar.innerHTML=_a[0].innerHTML;if(selid==1)textVar.className=_a[0].className;mmoitems[itemid].className='mmoActive';}
for(var i=0;i<mmoitems.length;i++){if(mmoitems[i].className=='mmoActive'){mmoActive_select.activeit=mmoitems[i];mmoActive_select.activeid=i;mmoActive_select.url=(mmoitems[i].getElementsByTagName('a'))?mmoitems[i].getElementsByTagName('a')[0].href:null;}}
return mmoActive_select;}
function mmoShowOptions(g){var _elem=document.getElementById("mmoOptionsDiv"+g);if((mmoActive_select)&&(mmoActive_select!=_elem)){mmoActive_select.className="mmoOptionsDivInvisible";document.getElementById('mmonetbar').focus();}
if(_elem.className=="mmoOptionsDivInvisible"){document.getElementById('mmoFocus').focus();mmoActive_select=mmoSetActive(g);if(document.documentElement){document.documentElement.onclick=mmoHideOptions;}else{window.onclick=mmoHideOptions;}
_elem.className="mmoOptionsDivVisible";}else if(_elem.className=="mmoOptionsDivVisible"){_elem.className="mmoOptionsDivInvisible";document.getElementById('mmonetbar').focus();}}
function mmoHideOptions(e){if(mmoActive_select){if(!e)e=window.event;var _target=(e.target||e.srcElement);if((_target.id.indexOf('mmoOptionsDiv')!=-1))return false;if(mmoisElementBefore(_target,'mmoSelectArea')==0&&(mmoisElementBefore(_target,'mmoOptionsDiv')==0)){mmoActive_select.className="mmoOptionsDivInvisible";mmoActive_select=null;}}else{if(document.documentElement)document.documentElement.onclick=function(){};else window.onclick=null;}}
function mmoisElementBefore(_el,_class){var _parent=_el;do _parent=_parent.parentNode;while(_parent&&(_parent.className!=null)&&(_parent.className.indexOf(_class)==-1))
return(_parent.className&&(_parent.className.indexOf(_class)!=-1))?1:0;}
var ua=navigator.userAgent.toLowerCase();var ie6browser=((ua.indexOf("msie 6")>-1)&&(ua.indexOf("opera")<0))?true:false;function highlight(el,mod){if(ie6browser){if(mod==1&&!el.className.match(/highlight/))el.className=el.className+' highlight';else if(mod==0)el.className=el.className.replace(/highlight/g,'');}}
var mmoToggleDisplay={init:function(wrapper){var wrapper=document.getElementById(wrapper);if(!wrapper)return;var headline=wrapper.getElementsByTagName("h4")[0],link=headline.getElementsByTagName("a")[0];if(link.className.indexOf("gameCountZero")!=-1)return false;var panel=document.getElementById(link.hash.substr(1));mmoToggleDisplay.hidePanel(panel,link);link.onclick=function(e){mmoToggleDisplay.loadImages();mmoToggleDisplay.toggle(this,panel);return false;};mmoToggleDisplay.outerClick(wrapper,link,panel);var timeoutID=null,delay=8000;wrapper.onmouseout=function(e){if(!e){var e=window.event;}
var reltg=(e.relatedTarget)?e.relatedTarget:e.toElement;if(reltg==wrapper||mmoToggleDisplay.isChildOf(reltg,wrapper)){return;}
timeoutID=setTimeout(function(){mmoToggleDisplay.hidePanel(panel,link);},delay);};wrapper.onmouseover=function(e){if(timeoutID){clearTimeout(timeoutID);}};},isChildOf:function(child,parent){while(child&&child!=parent){child=child.parentNode;}
if(child==parent){return true;}else{return false;}},hidePanel:function(panel,link){panel.style.display="none";link.className="toggleHidden";},toggle:function(link,panel){panel.style.display=panel.style.display=="none"?"block":"none";link.className=link.className=="toggleHidden"?"":"toggleHidden";},outerClick:function(wrapper,link,panel){document.body.onclick=function(e){if(!e){e=window.event};if(!(mmoToggleDisplay.isChildOf((e.target||e.srcElement),wrapper))&&panel.style.display!="none"){mmoToggleDisplay.toggle(link,panel);}}},loadImages:function(){var script=document.createElement("script");script.type="text/javascript";var jsonGameData_browser='{"ogame":"\/\/gf3.geo.gfsrv.net\/cdnb0\/c20f48341425976269d3a264db260a.png","ikariam":"\/\/gf1.geo.gfsrv.net\/cdnfb\/468d7d51b2103198945d3f644169b7.png","battleknight":"\/\/gf3.geo.gfsrv.net\/cdn88\/1078f8c8b702f6c00bd80540a15de4.png","gladiatus":"\/\/gf2.geo.gfsrv.net\/cdn1d\/0da04cb94431ecf8cba6cc17d07ced.png","bitefight":"\/\/gf1.geo.gfsrv.net\/cdn3f\/d53efd82d430eaa71b708336af9624.png","kingsage":"\/\/gf1.geo.gfsrv.net\/cdncd\/48d4d41c64ce8cd6d180828935ef80.png","legend":"\/\/gf1.geo.gfsrv.net\/cdn96\/a18e9b9eb3b66c3a2c17b7bcd55ab4.png","wildguns":"\/\/gf1.geo.gfsrv.net\/cdn9d\/8ca347af6831c0d9d8228b7c9c1dde.png"}',jsonGameData_client='{"tera":"\/\/gf3.geo.gfsrv.net\/cdnb5\/0b1b26b8b66178b010770fac4acfbb.png","hex":"\/\/gf3.geo.gfsrv.net\/cdn53\/acd970e7571f1cc87546790c2d5470.png","omd":"\/\/gf1.geo.gfsrv.net\/cdn38\/6015904d6e815078eefc9a7d33ab37.png","metin2":"\/\/gf1.geo.gfsrv.net\/cdnfb\/2d18fa73d86d854e70e8cb30f2e807.png","elsword":"\/\/gf2.geo.gfsrv.net\/cdn4c\/6a0ed1f5897259436b1788f1354c34.png","4story":"\/\/gf1.geo.gfsrv.net\/cdn9f\/35e42e0330b32d00feda51fefb72cd.png","runesofmagic":"\/\/gf1.geo.gfsrv.net\/cdn02\/44386429f3eddd9ff8b610d4c9dc1b.png","wizard101":"\/\/gf1.geo.gfsrv.net\/cdn3a\/742c2e5b7721f927c6cc6e607cb948.png"}',jsonGameData_featured='{"aion":"\/\/gf3.geo.gfsrv.net\/cdn2d\/046e52d21b75a09c77bae4fba0d96b.png"}';script.text='';script.text+=' mmoToggleDisplay.callback('+jsonGameData_featured+', "featured");';script.text+=' mmoToggleDisplay.callback('+jsonGameData_client+', "client");';script.text+='mmoToggleDisplay.callback('+jsonGameData_browser+', "browser");';document.getElementsByTagName("head")[0].appendChild(script);mmoToggleDisplay.loadImages=function(){};},callback:function(data,gamesCat){for(var gameName in data){var gameSpan=document.getElementById("gameImgTarget_"+gameName);if(!gameSpan){return false;}
var gameImg=document.createElement("img");gameImg.src=""+data[gameName];gameImg.alt="";gameSpan.appendChild(gameImg);}}}    </script>
    <div id="mmoContent" class="mmonewsout">

        <a id="mmoLogo" target="_top" href="http://de.gameforge.com/games/nostale?kid=5-29806-09106-1105-101121e1" title="Gameforge.com &ndash; Feel free to play">Gameforge.com &ndash; Feel free to play</a>

            <!-- news -->
            <div id="mmoNews">
                <div class="mmoBoxLeft"></div>
                <div class="mmoBoxMiddle" onmouseover="mmoTickHalt=true;" onmouseout="mmoTickHalt=false;">
                    <div class="mmoNewsContent">
                        <div id="mmoNewsticker">
                            <ul>
                                        <li class="mmoTickShow"><a target="_top" href="http://de.hex.gameforge.com/landing.html?kid=5-94306-09006-1609-020271bf">HEX - Entdecke das neue Kartenset!</a></li>
                                </ul>
                        </div>
                    </div>
                </div>
                <div class="mmoBoxRight"></div>
            </div>


        <div id="mmoGame" class="mmoGame">
            <div class="mmoBoxLeft"></div>
            <div class="mmoBoxMiddle">

                <!--<div id="mmoGames"></div>-->

                <div id="mmoLangs">
                        <label>Land wählen:</label>
                        <div id="mmoLangSelect" class="mmoSelectbox">
                            <div id="mmoSarea1" onclick="mmoShowOptions(1)" class="mmoSelectArea">
                                <div class="mmoSelectText" id="mmoMySelectContent1">
    <div id="mmoMySelectText1" class="mmoflag mmo_DE">Deutschland</div>                                </div>
                                <div class="mmoSelectButton"></div>
                            </div>
                            <div class="mmoOptionsDivInvisible" id="mmoOptionsDiv1">
                                <ul class="mmoLangList" id="mmoList1">
    <li><a href="//nostale.cz/?kid=5-09131-09106-1105-120121a7" target="_top" rel="nofollow" class="mmoflag mmo_CZ">Ceská Republika</a></li>
<li class="mmoActive"><a href="//nostale.de/?kid=5-09106-09106-1105-12012196" target="_top" rel="nofollow" class="mmoflag mmo_DE">Deutschland</a></li>
<li><a href="//nostale.org/?kid=5-09109-09106-1105-1201214c" target="_top" rel="nofollow" class="mmoflag mmo_ES">España</a></li>
<li><a href="//nostale.fr/?kid=5-09108-09106-1105-12012124" target="_top" rel="nofollow" class="mmoflag mmo_FR">France</a></li>
<li><a href="//nostale.it/?kid=5-09110-09106-1105-1201211b" target="_top" rel="nofollow" class="mmoflag mmo_IT">Italia</a></li>
<li><a href="//nostale.pl/?kid=5-09111-09106-1105-120121c2" target="_top" rel="nofollow" class="mmoflag mmo_PL">Polska</a></li>
<li><a href="//nostale.web.tr/?kid=5-09114-09106-1105-120121f4" target="_top" rel="nofollow" class="mmoflag mmo_TR">Türkiye</a></li>
<li><a href="//nostale.co.uk/?kid=5-09107-09106-1105-1201212d" target="_top" rel="nofollow" class="mmoflag mmo_EN">United Kingdom</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="mmoBoxRight"></div>

                <div id="mmoGamesOverviewPanel">
                    <div id="mmoGamesOverviewToggle">
                        <h4>
                            <a href="#mmoGamesOverviewLists">Weitere Spiele<span class="mmoNbPseudoSelect_icon"></span></a>
                            <span class="mmoNbBoxEdge mmoNbBoxEdge_left"></span>
                            <span class="mmoNbBoxEdge mmoNbBoxEdge_right"></span>
                        </h4>
                    </div>
                            <div id="mmoGamesOverviewLists">
                            <div id="mmoGamesOverviewCountry" class="mmo_DE"></div>

                                        <!-- Section: Featured Game -->
                                <h5>Empfohlenes Spiel</h5>
                                <ul id="mmoGamesOverview_featured">
                                                    <li>
                                            <a href="http://aionfreetoplay.com/?kid=5-62006-09106-1105-12028174" title="Verdiene dir deine Flügel" target="_blank">
                                                <span id="gameImgTarget_aion" class="gameImgTarget"></span>
                                                <span class="gameName">AION Free-to-Play</span>
                                            </a>
                                        </li>
                                                                </ul>
                            
                                                            <!-- Section: Client Games -->
                                <h5>MMORPGs</h5>
                                <ul id="mmoGamesOverview_client">
                                                                            <li class="mmoGameIcon mmoGameIcon_tera mmoGameIcon_tera_de">
                                            <a href="http://de.tera.gameforge.com/?kid=5-60906-09106-1105-120281b8" title="The Exiled Realm of Arborea" target="_blank">
                                                <span id="gameImgTarget_tera" class="gameImgTarget"></span>
                                        TERA                                            </a>
                                        </li>
                                                                            <li class="mmoGameIcon mmoGameIcon_hex mmoGameIcon_hex_de">
                                            <a href="http://de.hex.gameforge.com/?kid=5-94306-09106-1105-120281f8" title="Das MMO-Sammelkartenspiel!" target="_blank">
                                                <span id="gameImgTarget_hex" class="gameImgTarget"></span>
                                        HEX: Shards of Fate                                            </a>
                                        </li>
                                                                            <li class="mmoGameIcon mmoGameIcon_omd mmoGameIcon_omd_de">
                                            <a href="http://de.omd.gameforge.com/?kid=5-94206-09106-1105-120281d5" title="KOOPERATIVE ACTION-TOWER-DEFENSE" target="_blank">
                                                <span id="gameImgTarget_omd" class="gameImgTarget"></span>
                                        Orcs Must Die! Unchained                                            </a>
                                        </li>
                                                                            <li class="mmoGameIcon mmoGameIcon_metin2 mmoGameIcon_metin2_de">
                                            <a href="http://metin2.de/?kid=5-02006-09106-1105-12028110" title="Schärfe Klinge und Geist" target="_blank">
                                                <span id="gameImgTarget_metin2" class="gameImgTarget"></span>
                                        Metin2                                            </a>
                                        </li>
                                                                            <li class="mmoGameIcon mmoGameIcon_elsword mmoGameIcon_elsword_de">
                                            <a href="http://de.elsword.gameforge.com/?kid=5-48806-09106-1105-1202810b" title="Fiese Monster, coole Helden" target="_blank">
                                                <span id="gameImgTarget_elsword" class="gameImgTarget"></span>
                                        Elsword                                            </a>
                                        </li>
                                                                            <li class="mmoGameIcon mmoGameIcon_4story mmoGameIcon_4story_de">
                                            <a href="http://de.4story.gameforge.com/?kid=5-23306-09106-1105-120281a4" title="Von Wahrheit und Licht" target="_blank">
                                                <span id="gameImgTarget_4story" class="gameImgTarget"></span>
                                        4Story                                            </a>
                                        </li>
                                                                            <li class="mmoGameIcon mmoGameIcon_runesofmagic mmoGameIcon_runesofmagic_de">
                                            <a href="http://de.runesofmagic.gameforge.com/?kid=5-46806-09106-1105-12028186" title="DAS PREISGEKRÖNTE MMORPG" target="_blank">
                                                <span id="gameImgTarget_runesofmagic" class="gameImgTarget"></span>
                                        Runes of Magic                                            </a>
                                        </li>
                                                                            <li class="mmoGameIcon mmoGameIcon_wizard101 mmoGameIcon_wizard101_de">
                                            <a href="http://wizard101.de/?kid=5-47606-09106-1105-12028132" title="Zauber dich ins Abenteuer!" target="_blank">
                                                <span id="gameImgTarget_wizard101" class="gameImgTarget"></span>
                                        Wizard101                                            </a>
                                        </li>
                                                                    </ul>
                                
                                        <!-- Section: Browser Games -->
                                <h5>Browsergames</h5>
                                <ul id="mmoGamesOverview_browser">
                                                                            <li class="mmoGameIcon mmoGameIcon_ogame mmoGameIcon_ogame_de">
                                            <a href="http://de.ogame.gameforge.com/?kid=5-00106-09106-1105-1202815e" title="Kolonien der Zukunft" target="_blank">
                                                <span id="gameImgTarget_ogame" class="gameImgTarget"></span>
                                    OGame                                            </a>
                                        </li>
                                                                            <li class="mmoGameIcon mmoGameIcon_ikariam mmoGameIcon_ikariam_de">
                                            <a href="http://de.ikariam.gameforge.com/?kid=5-03806-09106-1105-1202819a" title="Lebe die Antike!" target="_blank">
                                                <span id="gameImgTarget_ikariam" class="gameImgTarget"></span>
                                    Ikariam                                            </a>
                                        </li>
                                                                            <li class="mmoGameIcon mmoGameIcon_battleknight mmoGameIcon_battleknight_de">
                                            <a href="http://battleknight.de/?kid=5-01906-09106-1105-120281b6" title="Für Ruhm und den König" target="_blank">
                                                <span id="gameImgTarget_battleknight" class="gameImgTarget"></span>
                                    BattleKnight                                            </a>
                                        </li>
                                                                            <li class="mmoGameIcon mmoGameIcon_gladiatus mmoGameIcon_gladiatus_de">
                                            <a href="http://de.gladiatus.gameforge.com/?kid=5-03706-09106-1105-12028159" title="Blut, Staub und Ruhm" target="_blank">
                                                <span id="gameImgTarget_gladiatus" class="gameImgTarget"></span>
                                    Gladiatus                                            </a>
                                        </li>
                                                                            <li class="mmoGameIcon mmoGameIcon_bitefight mmoGameIcon_bitefight_de">
                                            <a href="http://de.bitefight.gameforge.com/?kid=5-00206-09106-1105-12028150" title="Rivalen der Nacht" target="_blank">
                                                <span id="gameImgTarget_bitefight" class="gameImgTarget"></span>
                                    BiteFight                                            </a>
                                        </li>
                                                                            <li class="mmoGameIcon mmoGameIcon_kingsage mmoGameIcon_kingsage_de">
                                            <a href="http://de.kingsage.gameforge.com/?kid=5-31106-09106-1105-12028165" title="Es lebe der König!" target="_blank">
                                                <span id="gameImgTarget_kingsage" class="gameImgTarget"></span>
                                    KingsAge                                            </a>
                                        </li>
                                                                            <li class="mmoGameIcon mmoGameIcon_legend mmoGameIcon_legend_de">
                                            <a href="http://de.tanoth.gameforge.com/?kid=5-20806-09106-1105-120281d3" title="Bezwinge die Dunkelheit" target="_blank">
                                                <span id="gameImgTarget_legend" class="gameImgTarget"></span>
                                    Tanoth                                            </a>
                                        </li>
                                                                            <li class="mmoGameIcon mmoGameIcon_wildguns mmoGameIcon_wildguns_de">
                                            <a href="http://wildguns.de/?kid=5-12706-09106-1105-12028190" title="Erobere die Prärie" target="_blank">
                                                <span id="gameImgTarget_wildguns" class="gameImgTarget"></span>
                                    WildGuns                                            </a>
                                        </li>
                                                                    </ul>
                                                </div><!-- /mmoGamesOverviewLists -->
                    </div><!-- /mmoGamesOverviewPanel -->
                    </div><!-- /mmoGame -->
        <input id="mmoFocus" type="text" size="5" />
    </div><!-- /mmoContent -->
</div><!-- /mmonetbar -->

<!-- nostale/de game 10.09.2016 16:01 -->
<script type="text/javascript">
    mmoInitSelect();
mmoTicker();    mmoToggleDisplay.init("mmoGamesOverviewPanel");
</script>


    <!--/* OpenX Interstitial or Floating DHTML Tag v2.8.8 */-->
    <div id="openXHackFoo"> 
        <script type='text/javascript'>
            var HTTP_GET_VARS = new Array();
            var strGET = document.location.search.substr(1, document.location.search.length);
            if (strGET != '') {
                var gArr = strGET.split('&');
                for (i = 0; i < gArr.length; ++i) {
                    var v = '';
                    var vArr = gArr[i].split('=');
                    if (vArr.length > 1) {
                        v = vArr[1];
                    }
                    HTTP_GET_VARS[unescape(vArr[0])] = unescape(v);
                }
            }
            function GET(v) {
                if (!HTTP_GET_VARS[v]) {
                    return '';
                }
                return HTTP_GET_VARS[v];
            }
            function openxDetectDeviceOS() {
                return (function(ua) {
                    if (/iPhone/i.test(ua) || /iPad/.test(ua) || /iPod/.test(ua)) {
                        return 'ios';
                    }
                    else if (/Android/.test(ua)) {
                        return 'android';
                    }
                    else if (/Windows Phone OS 7\.0/.test(ua)) {
                        return 'winphone7';
                    }
                    else if (/BlackBerry/.test(ua)) {
                        return 'rim';
                    }
                    else {
                        return 'desktop';
                    }
                })(navigator.userAgent);
            }
            function escapeHtml(str) {
                var div = document.createElement('div');
                div.appendChild(document.createTextNode(str));
                return div.innerHTML;
            }
            if (openxDetectDeviceOS() == 'desktop') {
                var params = 'zoneid=1594&source=Quelle&cb=INSERT_RANDOM_NUMBER_HERE&layerstyle=simple&align=right&valign=top&padding=2&shifth=30&shiftv=20&closebutton=t&backcolor=98AE12&bordercolor=EA5521';
                var m3_r = Math.floor(Math.random() * 99999999999);
                var m3_u = (document.location.protocol == 'https:' ? 'https://ads-delivery.gameforge.com/al.php' : 'http://delivery.ads.gfsrv.net/al.php');
                params = params.replace(/INSERT_RANDOM_NUMBER_HERE/g, m3_r);
                params = params + '&zindex=9999999&layerstyle=gameforge';
                params = params + '&kid=' + escapeHtml(GET('kid'));
                document.write("<scr" + "ipt type='text/javascript' src='" + m3_u + "?" + params + "'><\/scr" + "ipt>");
            }
        </script>
    </div>

<!-- #/MMO:NETBAR# -->
   
    </body>
</html>