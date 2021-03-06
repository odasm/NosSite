<?php

	include 'config.php';
    include 'connect-to-db.php';
session_start();
if(isset($_SESSION['username'])) {
	header("Location: /news/index/");
}

?>
<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <title><?php echo $website_title; ?></title>
        <meta name="description" content="<?php echo $description; ?>" />
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
   <body class="de"  > 

        <div id="backgroundWrapper">
            <div id="backgroundHeaderWrapper"><div id="backgroundHeader"></div></div>
            <div id="backgroundFooter"></div>
			            <div id="loginLayer" class="overlay" style="display:none">
                <div class="content_box">
                    <h1>Login</h1>
                                        <p>
                        Noch keinen Account?                        <a href="/user/register">
                            Melde dich kostenlos an!                        </a>
                    </p>
                                        <form name="loginFormAjax" id="loginFormAjax" action="/user/login" method="post">
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
<!--
<div class="checkbox_wrapper">    
    <input type="checkbox" id="stayLoggedIn"/> 
    <label for="stayLoggedIn">Angemeldet bleiben</label>
</div>
-->



                            </div>
                            <input type="submit" onClick="ajaxlogin(); return (false);" value="Anmelden" /> 
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
                                * Diese Felder bitte ausf�llen.                            </p>
                        </div>  
                    </form>
                </div>
            </div>
            <div id="wrapper">
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
                                    Welcome stranger!                                </h1>
                                <div class="col_wrapper">
                                    <p class="login">                                
                                        <a href="#loginLayer"  class="fancybox button">
                                            Log-In                                        </a>
                                    </p>
                                    <p class="register_now">
                                        Still no account?                                       <a href="/en/user/register/">Register now</a>
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
                                    Hello, 
                                    <strong onclick="show_user_options();">
                                      <?php echo $_SESSION['username']; ?>                                            <span class="arrow_top_small"> </span>
                                    </strong>
                                </p>
                                <!-- START Hover -->
                                <div id="useroptions">
                                    <nav id="userNav">
                                        <ul>
                                        <li><a href="">Einstellungen</a></li>
                                            <li><a href="" target="_mall">NosTaler Aufladen</a></li>
                                            <li class="last-child"><a href="">Ausloggen</a></li>
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
                            <li id="mainNavNews" >
                                <a href="/index.php" title="News" ><span>News</span></a>
                                <!--START  Navigation Aktiv -->
                                <div class="active_wrapper">
                                    <div class="active_content">
                                        <div class="active_fold"></div>
                                        <div class="right_line"></div>
                                        <div class="left_line"></div>
                                        <div class="active_triangle"></div>
                                    </div>
                                </div>
                                <!-- ENDE Navigation Aktiv-->
                            </li>
                                                        <li id="mainSearch">
                                <form method="post" action="/main/search/">
                                    <input type="search" onfocus="$('#mainSearch').addClass('active')" onblur="$('#mainSearch').removeClass('active')" id="search" name="search" value=""/>
                                    <input type="submit" value=" " />
                                </form>
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
                        <!--nav id="breadcrumbs" class="content_box">
    <ul>
        <li><a href="http://de.nostale.gameforge.com/news/" class="arrow_right_gray arrow">Home <span> </span></a></li>
        <li><a href="http://de.nostale.gameforge.com/user/register/" class="arrow_right_gray arrow"> Registrieren <span> </span></a></li>
        <li><a href="http://de.nostale.gameforge.com/user/register/">Neuer Account</a></li>
    </ul>
    <div class="clearfix"></div>
</nav-->

<nav id="breadcrumbs" class="content_box">
    <ul>
        <!-- Standard li fuer die breadcrumbs-->
                <li>
            <a href="/index.php"  class="arrow_right_gray arrow">
                News                                <span> </span>
                            </a>
        </li>
                <li>
            <a href="/user/register/"  class="arrow_right_gray arrow">
                Registrieren                                <span> </span>
                            </a>
        </li>
                <li>
            <a href=""  class="arrow_right_gray arrow">
                Neuer Account                            </a>
        </li>
            </ul>
    <div class="clearfix"></div>
</nav>
<header class="content_header">    
    <h1>Registrierung </h1>
    <p>
        In drei einfachen Schritten kannst du kostenlos <?php echo $website_title; ?> spielen und zum Fantasy-Held werden!    </p>
</header><div class="col_2_wrapper">
    <div class="col_1">
        <div class="content_box">
            <ol id="registrationSteps">
    <li id="step1" class="active">
        <span class="icon" > </span>
        Account anlegen         <span class="box_arrow_up"> </span>
    </li>
    <!--<li id="step2" class=" ">
        <span class="icon" > </span>
        E-Mail-Adresse best�tigen         <span class="box_arrow_up"> </span>
    </li> -->
    <li id="step3" class="">
        <span class="icon" > </span>
        Spielen und Spa� haben!         <span class="box_arrow_up"> </span>
    </li>
    <li class="clear"></li>
</ol>            <div class="white_box">  
                <h2 class="border_bottom">Neuer Account</h2>
                <form action="/register.php" method="post" name="reg" id="reg">

                    <label for="username">Benutzername*:</label>
					

                    <div class="input_wrapper <?php if(isset($_GET['user_error'])) echo 'error'; ?>">
                        <input type="text"
                               maxlength="16" 
                               id="username" 
                               name="username" 
                               class="ok-field validate[required,custom[noSpecialCharacters],minSize[5],maxSize[16]" 
                               value=""
                               /> 
                        <?php if(isset($_GET['user_error'])) {		?>  
	
						<div class="error_message_wrapper" onmouseover="$(this).addClass('z_index_top')" onmouseout="$(this).removeClass('z_index_top')">
                            <p class="error_message">
                                <span class="arrow"> </span>
                                <?php echo $_GET['user_error']; ?>                            </p>
                        </div>
						
						<?php } ?>
						
                    </div>
					
                    <div id="passwortStrengthWrapper">
                        <label id="passwordHint">
                            Passwort*: 
                        </label>
                        <div class="input_wrapper <?php if(isset($_GET['pass_error'])) echo 'error'; ?>">
                            <!-- START Passwort-Sicherheit -->
                            <div id="passwordHelp">
                                <span class="arrow"></span>
                                <p>
                                    <span class="info_icon_shadow"> </span>
                                                                   </p>
                            </div>
                            <input 
                                type="password"  
                                class=" ok-field validate[required,minSize[8],maxSize[16],custom[noSpecialCharacters],custom[strongPWD]]" 
                                id="password" 
                                name="password" 
                                maxlength="16" 
                                value="" 

                                onfocus="//$('#passwordHelp').fadeToggle()"
                                onblur="//$('#passwordHelp').fadeToggle()"
                                />
                            
                            <div id="securePwd">
                                <div class="valid-icon invalid"></div>
								<p>                                
                                <span class="icon_lock"> </span>
                                Passwortsicherheit:
                            </p>
								<div class="securePwdBarBox">
                                    <div id="securePwdBar"></div>
                                </div>
								<br class="clearfloat">

                                    <div </div>
                                </div>
                                
                            </div>
                            
                            
                            <!-- ENDE Passwort-Sicherheit -->

                                                    </div> 
                    </div> 
                    <label for="passwordRepeat">Passwort Wiederholung*:</label>
                    <div class="input_wrapper <?php if(isset($_GET['pass_rep_error'])) echo 'error'; ?>">
                        <span id="pwr" class=""> 
                            <input type="password" 
                                   id="passwordRepeat"
                                   name="passwordRepeat" 
                                   class="ok-field password_field validate[required,equals[password]]" 
                                value=""/>
                        </span>
                     
                          
                         
                    </div>

                    <!-- CAPTCHA -->
                                        <!-- ENDE: CAPTCHA -->   
                    
                    <div class="input_wrapper checkbox_wrapper ">
                        <input type="checkbox" 
                               id="agb" 
                               name="agb" 
                               class="validate[required] ok-field"
                                                                                 />
                        <label for="legal">
                        	I have read and understood the <a rel="nofollow" href="<?php echo $regelwerk; ?>" target="_blank"><strong>Rules</strong></a>.                        </label>
                     
                          
                    </div>
                    <input type="submit" value="Registrieren" />
                </form>
                


                 
                <h2 class="border_top">                                
                    <span class="icon_lock"> </span>
                    Passwortsicherheit:
                </h2>
                <p>                    
                    Damit andere Leute dein Passwort nicht erraten k�nnen, stelle bitte sicher, dass dein Passwort aus <strong>mindestens einem Gro�buchstaben</strong> oder <strong>einer Zahl</strong> besteht.
Zudem sollte es aus <strong>mindestens 8 Zeichen</strong> zusammengesetzt sein.                </p>
                <div class="hr_dotted"></div>
                <p class="info_text">
                    * Diese Felder bitte ausf�llen.                </p>
            </div>
            <div id="registrationBottom">                
                <img src="//gf3.geo.gfsrv.net/cdnbf/97a8dc1390cdaccf17f30001cc86ab.png" id="registrationMascots" />
            </div>
        </div>
    </div>
    <div class="col_2">

                         <div class="content_box info_box">
            <h1>Already have an account?</h1>                
            <div class="info_box_content" id="login_box">
                <p class="bold">Then log in right here:</p>
                <form method="post" action="<?php echo $login; ?>">
                  <div id="loginform" name="loginform">
                  <!-- Class error, wenn es einen fehler gibt -->
<div class="input_wrapper">
    <label for="usernameLogin">Username*:</label>
    <input 
        type="text" 
        class=""
        id="usernameLogin" 
        name="username"
    />
</div>
<div class="input_wrapper">
    <label for="passwordLogin">Password*:</label>
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
                    <input type="submit" class="button" value="Anmelden" />
                </form>   
                <div class="help_link">
                    <a  href="<?php echo $passwordlost; ?>" class="info_text">
                        <span class="icon_question_mark"> </span>
                        Help, I've forgotten my password!                   </a> 
                </div>
                <div class="border_bottom help_link">
                    <a href="<?php echo $resendack; ?>" class="info_text">
                        <span class="icon_question_mark"> </span>
                        Help! I cannot activate my account!                 </a>
                </div>
                <p class="info_text">
                    *Required fields.             </p>
            </div>
            <!--div class="info_box_content">
                <p class="bold">                        
                    Oder logge dich �ber einen der folgenden Dienste ein:                </p>
                <div id="loginIcons">
                    Faceboo
                    google+
                    Twitter
                </div>
            </div-->
        </div>    </div>
    <div class="clear"></div>
</div>

<script type="text/javascript">
  
     $(document).ready(function() {
        validateForm('#reg');
        passwordBar('#password');
     });

         
   
    
//     function showPassword() 
//     {
//         jQuery("#userPasswordVisible").addClass('hidden');
//         jQuery("#userPasswordHidden").removeClass('hidden');
//         $.post('ajax/user/makePWvisible/0', function(data) { 
//           $('#pw').html(data);
//         });
//         $.post('ajax/user/makePWvisible/1', function(data) {
//           $('#pwr').html(data);          
//         });
//                     
//     };
//     
//     function hidePassword()
//     {
//         jQuery("#userPasswordHidden").addClass('hidden');
//         jQuery("#userPasswordVisible").removeClass('hidden');
//         $.post('ajax/user/makePWhide/0', function(data) {
//           $('#pw').html(data);
//         });  
//         $.post('ajax/user/makePWhide/1', function(data) {
//           $('#pwr').html(data);           
//         });
//     };
    
    
    
    

</script>                     </div>

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
                                    <li><a href="http://de.nostale.gameforge.com/game/faq">FAQ - H�ufige Fragen</a></li>
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
                                � 2007 Entwell Co., Ltd. Ver�ffentlicht von der Gameforge 4D GmbH. <br />
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
       
    </body>
</html>