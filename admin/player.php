
<?php

ob_start();

 include 'inc/header.php';
ob_end_clean();
// Session::CheckSession();


$inactive = 0.5; 
// ini_set('session.gc_maxlifetime', $inactive); 
// set the session max lifetime to 2 hours

Session::CheckSession();

if (isset($_SESSION['testing']) && (time() - $_SESSION['testing'] > $inactive)) {
    // last request was more than 2 hours ago
    session_unset();     // unset $_SESSION variable for this page
    session_destroy();   // destroy session data
}
$_SESSION['testing'] = time(); // Update session



$logMsg = Session::get('logMsg');
?>



<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Julian Mack, Experiences, ​Portfolio, ​Build your website
in record time">
    <meta name="description" content="">
    <title>GestEleven</title>
    <link rel="stylesheet" href="../cosmos_network.css" media="screen">
<link rel="stylesheet" href="Ousmane-Camara.css" media="screen">
    <script class="u-script" type="text/javascript" src="../jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="../cosmos_network.js" defer=""></script>
    <meta name="generator" content="Cosmos_network 6.3.1, cosmos_network.com">
    <meta name="referrer" content="origin">

    <script> document.addEventListener('keyup', (e) => {
      navigator.clipboard.writeText('');
      alert('screenshot Disabled');
    });
    document.addEventListener("contextmenu", function (event) {
      event.preventDefault();
      alert('Right Click is Disable');
    }, false); </script><!-- **************************disable all ctrl******************************** -->
    <script type="text/javascript"> document.addEventListener('mousedown', function (e) {
      if (e.button === 2) {
        e.preventDefault();
      }
    });
    var isNS = (navigator.appName == "Netscape") ? 1 : 0;
    if (navigator.appName == "Netscape") document.captureEvents(Event.MOUSEDOWN || Event.MOUSEUP);
    function mischandler() {
      return false;
    }
    function mousehandler(e) {
      var myevent = (isNS) ? e : event;
      var eventbutton = (isNS) ? myevent.which : myevent.button;
      if ((eventbutton == 2) || (eventbutton == 3)) return false;
    }
    document.oncontextmenu = mischandler;
    document.onmousedown = mousehandler;
    document.onmouseup = mousehandler;
    var isCtrl = false;
    document.onkeyup = function (e) {
      if (e.which == 17)
        isCtrl = false;
    }
    document.onkeydown = function (e) {
      if (e.which == 17)
        isCtrl = true;
      if (((e.which == 85) || (e.which == 117) || (e.which == 65) || (e.which == 97) || (e.which == 67) || (e.which == 99)) && isCtrl == true) {
        // alert(‘Keyboard shortcuts are cool!’);
        return false;
      }
    } </script><!-- ********************disable all ctrl*************** --><!-- *********************** screen shot **************************** -->
<!-- *******************close page after time*************************** -->
<!-- *******************close page after time*************************** -->
<!-- *******************close page after time*************************** -->
 <script>
        // Set the time delay in milliseconds (e.g., 5000 milliseconds = 5 seconds)
        var delayInMilliseconds = 1800000;

        // Use setTimeout to wait for the specified time and then perform the redirection
        setTimeout(function () {
            // Change the URL to the desired destination
            window.location.href = '../Home.html';
        }, delayInMilliseconds);
    </script>
<!-- *******************close page after time*************************** -->
<!-- *******************close page after time*************************** -->
<!-- *******************close page after Refrech*************************** -->
<script>
  var expirationDate = new Date(0); // Set the expiration date to a past date
document.cookie = "yourCookieName=yourCookieValue; expires=" + expirationDate.toUTCString() + "; path=Espace.php";
</script>

<!-- *******************close page after Refrech*************************** -->
    <link rel="icon" href="images/favicon.png">
    <link id="u-theme-google-font" rel="stylesheet" href="../fonts.css">
    <link id="u-page-google-font" rel="stylesheet" href="Ousmane-Camara-fonts.css">
    
    
    
    
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "footballer",
		"logo": "images/logo-gest-eleven-gold.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Ousmane Camara">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
 
  <body data-path-to-root="./" data-include-products="false" class="u-body u-xxl-mode" data-lang="en"><header class="u-black u-clearfix u-header u-header" id="sec-216b"><div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-xl u-valign-middle-xxl u-sheet-1">
        <a href="../Home.html" class="u-image u-logo u-image-1" data-image-width="519" data-image-height="239" title="Home">
          <img src="../images/logo-gest-eleven-gold.png" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-one-level u-offcanvas u-menu-1">
          <div class="menu-collapse u-custom-font" style="font-size: 1rem; letter-spacing: 0px; font-family: Poppins;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#" data-lang-en="{&quot;content&quot;:&quot;<svg class=\&quot;u-svg-link\&quot; viewBox=\&quot;0 0 24 24\&quot;><use xmlns:xlink=\&quot;http://www.w3.org/1999/xlink\&quot; xlink:href=\&quot;#menu-hamburger\&quot;></use></svg><svg class=\&quot;u-svg-content\&quot; version=\&quot;1.1\&quot; id=\&quot;menu-hamburger\&quot; viewBox=\&quot;0 0 16 16\&quot; x=\&quot;0px\&quot; y=\&quot;0px\&quot; xmlns:xlink=\&quot;http://www.w3.org/1999/xlink\&quot; xmlns=\&quot;http://www.w3.org/2000/svg\&quot;>    <g>        <rect y=\&quot;1\&quot; width=\&quot;16\&quot; height=\&quot;2\&quot;></rect>        <rect y=\&quot;7\&quot; width=\&quot;16\&quot; height=\&quot;2\&quot;></rect>        <rect y=\&quot;13\&quot; width=\&quot;16\&quot; height=\&quot;2\&quot;></rect>    </g></svg>&quot;,&quot;href&quot;:&quot;#&quot;}">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-custom-font u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-custom-color-1 u-text-custom-color-1 u-text-hover-palette-2-base" href="../Home.html" data-lang-en="{&quot;content&quot;:&quot;Home&quot;,&quot;href&quot;:&quot;../Home.html&quot;}" style="padding: 10px 20px;">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-custom-color-1 u-text-custom-color-1 u-text-hover-palette-2-base" href="../AboutUs.html" data-lang-en="{&quot;content&quot;:&quot;About Us&quot;,&quot;href&quot;:&quot;../AboutUs.html&quot;}" style="padding: 10px 20px;">About Us</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-custom-color-1 u-text-custom-color-1 u-text-hover-palette-2-base" href="../OurService.html" data-lang-en="{&quot;content&quot;:&quot;Our Service&quot;,&quot;href&quot;:&quot;OurService.html&quot;}" style="padding: 10px 20px;">Our Service</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-custom-color-1 u-text-custom-color-1 u-text-hover-palette-2-base" href="Espace.php" data-lang-en="{&quot;content&quot;:&quot;Espace&quot;,&quot;href&quot;:&quot;Espace.html&quot;}" style="padding: 10px 20px;">Espace</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-custom-color-1 u-text-custom-color-1 u-text-hover-palette-2-base" href="../Contact.php" data-lang-en="{&quot;content&quot;:&quot;Contact Us&quot;,&quot;href&quot;:&quot;Contact.html&quot;}" style="padding: 10px 20px;">Contact</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center-lg u-align-center-xl u-align-center-xxl u-align-left-md u-align-left-sm u-align-left-xs u-custom-font u-nav u-popupmenu-items u-spacing-5 u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.html" data-lang-en="{&quot;content&quot;:&quot;Home&quot;,&quot;href&quot;:&quot;Home.html&quot;}">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="../AboutUs.html" data-lang-en="{&quot;content&quot;:&quot;About Us&quot;,&quot;href&quot;:&quot;../AboutUs.html&quot;}">About Us</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="../OurService.html" data-lang-en="{&quot;content&quot;:&quot;Our Service&quot;,&quot;href&quot;:&quot;OurService.html&quot;}">Our Service</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Espace.php" data-lang-en="{&quot;content&quot;:&quot;Espace&quot;,&quot;href&quot;:&quot;Espace.html&quot;}">Espace</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="../Contact.html" data-lang-en="{&quot;content&quot;:&quot;Contact Us&quot;,&quot;href&quot;:&quot;Contact.html&quot;}">Contact</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header> 
      <?php
      
        $Player = new Player();
        class Player
        {
        
            private $db;
        
            // Db __construct Method
            public function __construct()
            {
                $this->db = new Database();
            }
        
        
        
            public function getPlayerInfoById($id_pl)
            {
                $sql = "SELECT * FROM players WHERE id_pl = :id_pl LIMIT 1";
                $stmt = $this->db->pdo->prepare($sql);
                $stmt->bindValue(':id_pl', $id_pl);
        
                $stmt->execute();
                $result = $stmt->fetch(PDO::FETCH_OBJ);
                if ($result) {
                    return $result;
                } else {
                    return false;
                }
        
        
            }
        }
        if (isset($_GET['id_pl'])) {
            $id_pl = preg_replace('/[^a-zA-Z0-9-]/', '', (int) $_GET['id_pl']);
        
        
        }
        
        $allplayer = $Player->getPlayerInfoById($id_pl);
        
        ?>
    <section class="u-clearfix u-image u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-section-1" id="sec-7ab1" data-image-width="1980" data-image-height="1320">
      <div class="u-clearfix u-sheet u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-sheet-1">
        <div class="data-layout-selected u-clearfix u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-layout-wrap u-layout-wrap-1">
          <div class="u-gutter-0 u-layout" style="">
            <div class="u-layout-row" style="">
              <div class="u-align-left u-container-style u-layout-cell u-size-28-lg u-size-28-xl u-size-60-md u-size-60-sm u-size-60-xs u-layout-cell-1" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="0">
                <div class="u-container-layout u-container-layout-1">
                  <h3 class="u-align-left u-text u-text-body-alt-color u-text-1"></h3>
                  <h2 class="u-align-left u-text u-text-body-alt-color u-text-2" data-animation-name="customAnimationIn" data-animation-duration="1250" data-animation-delay="750">
                    <?php echo $allplayer->name_pl ?>
                  </h2>
                  <div class="custom-expanded u-align-left u-border-1 u-border-palette-5-light-1 u-line u-line-horizontal u-opacity u-opacity-30 u-line-1"></div>
                  <p class="u-align-left u-text u-text-palette-5-light-2 u-text-3"> Date of Birth:&nbsp; &nbsp; &nbsp;<span style="font-weight: 400;"><?php echo $allplayer->datebirthday ?></span>
                    <br>Age:&nbsp; &nbsp; &nbsp; &nbsp;
                  &nbsp; &nbsp; &nbsp;&nbsp;<span style="font-weight: 400;">
                      <span style="font-weight: 400;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<?php echo $allplayer->age ?>&nbsp;</span>ans
                    </span>
                    <br>Height:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span style="font-weight: normal;"><?php echo $allplayer->height ?>M</span>
                    <span style="font-size: 1.25rem;"></span>
                    <br>Nationality:&nbsp; &nbsp; &nbsp; &nbsp; <span style="font-weight: normal;"><?php echo $allplayer->nationality ?></span>
                    <br>Foot:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span style="font-weight: normal;"><?php echo $allplayer->foot ?></span>
                    <br>Current Time :&nbsp;
                  &nbsp;<span style="font-weight: 400;"><?php echo $allplayer->currenttime ?></span>
                    <span style="font-weight: 400;">&nbsp;</span>
                  </p>
                  <img class="u-image u-image-circle u-image-contain u-preserve-proportions u-image-1" src="image/<?php echo $allplayer->logo_equipe ?>" alt="" data-image-width="139" data-image-height="181">
                  <a href="#" class="u-active-palette-5-dark-2 u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-hover-palette-5-dark-2 u-radius-8 u-text-active-white u-text-body-alt-color u-text-hover-white u-btn-1" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="250">Download cv&nbsp;&nbsp;<span class="u-file-icon u-icon u-text-white u-icon-1"><img src="../images/959159-5d3ea7b7.png" alt=""></span>
                  </a>
                </div>
              </div>
              <div class="u-container-style u-image u-image-contain u-image-default u-layout-cell u-size-32-lg u-size-32-xl u-size-60-md u-size-60-sm u-size-60-xs u-image-2" data-image-width="531" data-image-height="711" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="0" style="background-image: url('image/<?php echo $allplayer->image_pl ?>')">
                <div class="u-container-layout u-container-layout-2">
                  <a href="List-Footballer.php" class="u-border-none u-btn u-button-style u-custom-color-1 u-btn-2">Player
                  List</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center-lg u-align-center-md u-align-center-xl u-align-left-sm u-align-left-xs u-clearfix u-gradient u-section-2" id="carousel_0681">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-align-center u-text u-text-body-alt-color u-text-default u-text-1" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="0">TRANSFER HISTORY </h2>
        <p class="u-align-justify u-custom-font u-text u-text-palette-5-light-2 u-text-2" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500"> <span style="font-size: 1.125rem;"><?php echo $allplayer->transferthistory ?></span>
        </p>
        <div class="u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-align-left u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-1">
                <div class="u-border-2 u-border-white u-expanded-width u-line u-line-horizontal u-line-1" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="250"></div>
                <p class="u-align-left u-custom-font u-text u-text-palette-5-light-2 u-text-3" data-animation-name="customAnimationIn" data-animation-duration="1750"><?php echo $allplayer->datee ?></p>
                <div class="u-container-style u-expanded-width-sm u-expanded-width-xs u-group u-shape-rectangle u-group-1" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="750">
                  <div class="u-container-layout u-container-layout-2">
                    <h5 class="u-custom-font u-text u-text-custom-color-1 u-text-4">Season <?php echo $allplayer->season ?></h5>
                    <p class="u-custom-font u-text u-text-palette-5-light-1 u-text-5"> Joined :&nbsp; &nbsp; &nbsp;
                    &nbsp; &nbsp; &nbsp; <?php echo $allplayer->joinedd ?></p>
                    <img class="u-image u-image-circle u-image-contain u-preserve-proportions u-image-1" src="image/<?php echo $allplayer->logo_equipe ?>" alt="" data-image-width="139" data-image-height="181">
                    <p class="u-custom-font u-text u-text-palette-5-light-1 u-text-6">Left :&nbsp; &nbsp; &nbsp;
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <?php echo $allplayer->leftt ?></p>
                    <img class="u-image u-image-circle u-image-contain u-preserve-proportions u-image-2" src="image/<?php echo $allplayer->logo_equipe2 ?>" alt="" data-image-width="139" data-image-height="181">
                    <p class="u-custom-font u-text u-text-palette-5-light-1 u-text-7">MV :&nbsp; &nbsp; &nbsp;
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<?php echo $allplayer->mv ?></p>
                    <p class="u-custom-font u-text u-text-palette-5-light-1 u-text-8">Fee :&nbsp; &nbsp; &nbsp;
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <?php echo $allplayer->fee ?></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-align-left u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-3">
                <div class="u-border-2 u-border-white u-expanded-width u-line u-line-horizontal u-line-2" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="250"></div>
                <p class="u-align-left u-custom-font u-text u-text-palette-5-light-2 u-text-9" data-animation-name="customAnimationIn" data-animation-duration="1750"><?php echo $allplayer->datetwo ?></p>
                <div class="u-container-style u-expanded-width-sm u-expanded-width-xs u-group u-shape-rectangle u-group-2" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="750">
                  <div class="u-container-layout u-container-layout-4">
                    <h5 class="u-custom-font u-text u-text-custom-color-1 u-text-10">Season <?php echo $allplayer->seasontwo ?></h5>
                    <p class="u-custom-font u-text u-text-palette-5-light-1 u-text-11">Joined :&nbsp; &nbsp; &nbsp;
                    &nbsp; &nbsp; &nbsp; <?php echo $allplayer->joinedtwo ?></p>
                    <img class="u-image u-image-circle u-image-contain u-preserve-proportions u-image-3" src="image/<?php echo $allplayer->logo_equipe2 ?>" alt="" data-image-width="139" data-image-height="181">
                    <p class="u-custom-font u-text u-text-palette-5-light-1 u-text-12">Left :&nbsp; &nbsp; &nbsp;
                    &nbsp; &nbsp; &nbsp;​&nbsp; &nbsp; &nbsp; &nbsp;<?php echo $allplayer->lefttwo ?> &nbsp;</p>
                    <img class="u-image u-image-circle u-image-contain u-preserve-proportions u-image-4" src="image/<?php echo $allplayer->logo_equipe3 ?>" alt="" data-image-width="139" data-image-height="181">
                    <p class="u-custom-font u-text u-text-palette-5-light-1 u-text-13">MV :&nbsp; &nbsp; &nbsp;
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<?php echo $allplayer->mvtwo ?></p>
                    <p class="u-custom-font u-text u-text-palette-5-light-1 u-text-14">Fee&nbsp; &nbsp; &nbsp;
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <?php echo $allplayer->mvtwo ?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-palette-5-dark-3 u-section-3" id="carousel_902e">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-align-center u-text u-text-1" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="750"> Portfolio</h2>
        <p class="u-align-center u-text u-text-2" data-animation-name="customAnimationIn" data-animation-duration="1250" data-animation-delay="750">Video </p>
        <div class="custom-expanded u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-align-center u-container-align-center-xs u-container-style u-image u-list-item u-repeater-item u-shading u-uploaded-video u-video u-video-cover u-image-1" src="" data-animation-name="customAnimationIn" data-animation-duration="1750" data-animation-delay="500" data-image-width="634" data-image-height="479">
              <div class="u-absolute-hcenter u-background-video u-expanded" style="border-radius: 100%">
                <div class="embed-responsive">
                  <video class="embed-responsive-item" data-autoplay="1" loop="" muted="1" autoplay="autoplay" playsinline="">
                    <source src="image/<?php echo $allplayer->video1 ?>" type="video/mp4">
                    <p>Your browser does not support HTML5 video.</p>
                  </video>
                </div>
              </div>
              <div class="u-container-layout u-similar-container u-container-layout-1"></div>
            </div>
            <div class="u-align-center u-container-align-center-xs u-container-style u-image u-list-item u-repeater-item u-shading u-uploaded-video u-video u-video-cover u-image-2" src="" data-animation-name="customAnimationIn" data-animation-duration="1750" data-animation-delay="500" data-image-width="3233" data-image-height="2155">
              <div class="u-absolute-hcenter u-background-video u-expanded" style="border-radius: 100%">
                <div class="embed-responsive">
                  <video class="embed-responsive-item" data-autoplay="1" loop="" muted="1" autoplay="autoplay" playsinline="">
                    <source src="image/<?php echo $allplayer->video2 ?>" type="video/mp4">
                    <p>Your browser does not support HTML5 video.</p>
                  </video>
                </div>
                <div class="u-video-shading"></div>
              </div>
              <div class="u-container-layout u-similar-container u-container-layout-2"></div>
            </div>
            <div class="u-align-center u-container-align-center-xs u-container-style u-image u-list-item u-repeater-item u-shading u-uploaded-video u-video u-video-cover u-image-3" src="" data-animation-name="customAnimationIn" data-animation-duration="1750" data-animation-delay="500" data-image-width="1045" data-image-height="588">
              <div class="u-absolute-hcenter u-background-video u-expanded" style="border-radius: 100%">
                <div class="embed-responsive">
                  <video class="embed-responsive-item" data-autoplay="1" loop="" muted="1" autoplay="autoplay" playsinline="">
                    <source src="image/<?php echo $allplayer->video3 ?>" type="video/mp4">
                    <p>Your browser does not support HTML5 video.</p>
                  </video>
                </div>
                <div class="u-video-shading"></div>
              </div>
              <div class="u-container-layout u-similar-container u-container-layout-3"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-container-align-center-md u-container-align-center-sm u-container-align-center-xs u-gradient u-section-4" src="" id="carousel_c9e4">
      <div class="u-clearfix u-sheet u-valign-middle-md u-sheet-1">
        <div class="u-container-align-center-md u-container-align-center-sm u-container-align-center-xs u-container-style u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-group u-shape-rectangle u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <h3 class="u-align-center-md u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-xl u-custom-font u-text u-text-body-alt-color u-text-1" data-animation-name="customAnimationIn" data-animation-duration="1750" data-animation-delay="0"> About
            Oussmane</h3>
            <p class="u-align-center-md u-align-justify-lg u-align-justify-sm u-align-justify-xl u-align-justify-xs u-align-justify-xxl u-text u-text-body-alt-color u-text-2" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
            <?php echo $allplayer->about ?><br>
            </p>
          </div>
        </div>
        <div class="u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-align-center u-container-align-center u-container-style u-list-item u-repeater-item u-shape-rectangle">
              <div class="u-container-layout u-similar-container u-container-layout-2">
                <div class="u-container-style u-custom-color-1 u-group u-shape-circle u-group-2" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
                  <div class="u-container-layout u-valign-middle">
                    <h3 class="u-align-center u-hover-feature u-text u-text-default u-text-3" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000"> <?php echo $allplayer->startingeleven ?></h3>
                  </div>
                </div>
                <h5 class="u-align-center u-text u-text-body-alt-color u-text-default u-text-4">STARTING ELEVEN </h5>
              </div>
            </div>
            <div class="u-align-center u-container-align-center u-container-style u-list-item u-repeater-item u-shape-rectangle">
              <div class="u-container-layout u-similar-container u-container-layout-4">
                <div class="u-container-style u-custom-color-1 u-group u-shape-circle u-group-3" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
                  <div class="u-container-layout u-valign-middle">
                    <h3 class="u-align-center u-hover-feature u-text u-text-default u-text-5" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000"> <?php echo $allplayer->minutess ?></h3>
                  </div>
                </div>
                <h5 class="u-align-center u-text u-text-body-alt-color u-text-default u-text-6">MINUTES</h5>
              </div>
            </div>
            <div class="u-align-center u-container-align-center u-container-style u-list-item u-repeater-item u-shape-rectangle">
              <div class="u-container-layout u-similar-container u-container-layout-6">
                <div class="u-container-style u-custom-color-1 u-group u-shape-circle u-group-4" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
                  <div class="u-container-layout u-valign-middle">
                    <h3 class="u-align-center u-hover-feature u-text u-text-default u-text-7" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000"> <?php echo $allplayer->goalparticipation ?></h3>
                  </div>
                </div>
                <h5 class="u-align-center u-text u-text-body-alt-color u-text-default u-text-8">GOAL PARTICIPATION </h5>
              </div>
            </div>
            <div class="u-align-center u-container-align-center u-container-style u-list-item u-repeater-item u-shape-rectangle">
              <div class="u-container-layout u-similar-container u-container-layout-8">
                <div class="u-container-style u-custom-color-1 u-group u-shape-circle u-group-5" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
                  <div class="u-container-layout u-valign-middle">
                    <h3 class="u-align-center u-hover-feature u-text u-text-default u-text-9" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000"> <?php echo $allplayer->shotstaken ?></h3>
                  </div>
                </div>
                <h5 class="u-align-center u-text u-text-body-alt-color u-text-default u-text-10">SHOTS TAKEN</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      
      
      
    </section>
    
    
    
    
    <section class="u-align-center u-clearfix u-cookies-consent u-grey-80 u-cookies-consent" id="sec-f82d">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="data-layout-selected u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-gutter-0 u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-left-cell u-size-43-md u-size-43-sm u-size-43-xs u-size-46-lg u-size-46-xl u-layout-cell-1">
                <div class="u-container-layout u-valign-middle u-container-layout-1">
                  <h3 class="u-text u-text-default u-text-1">Cookies &amp; Privacy</h3>
                  <p class="u-text u-text-default u-text-2">This website uses cookies to ensure you get the best experience on our website.</p>
                </div>
              </div>
              <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-14-lg u-size-14-xl u-size-17-md u-size-17-sm u-size-17-xs u-layout-cell-2">
                <div class="u-container-layout u-valign-middle-lg u-valign-middle-md u-valign-middle-xl u-valign-top-sm u-valign-top-xs u-container-layout-2">
                  <a href="###" class="u-btn u-button-confirm u-button-style u-palette-1-base u-btn-1">Confirm</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <style> .u-cookies-consent {
  background-image: none;
}

.u-cookies-consent .u-sheet-1 {
  min-height: 212px;
}

.u-cookies-consent .u-layout-wrap-1 {
  margin-top: 30px;
  margin-bottom: 30px;
}

.u-cookies-consent .u-layout-cell-1 {
  min-height: 152px;
}

.u-cookies-consent .u-container-layout-1 {
  padding: 30px 60px;
}

.u-cookies-consent .u-text-1 {
  margin-top: 0;
  margin-right: 20px;
  margin-bottom: 0;
}

.u-cookies-consent .u-text-2 {
  font-size: 1rem;
  margin: 8px 20px 0 0;
}

.u-cookies-consent .u-layout-cell-2 {
  min-height: 152px;
}

.u-cookies-consent .u-container-layout-2 {
  padding: 30px;
}

.u-cookies-consent .u-btn-1 {
  margin: 0 auto 0 0;
}

@media (max-width: 1399px) {
  .u-cookies-consent .u-text-2 {
    font-size: 1.5rem;
  }
}

@media (max-width: 1199px) {
  .u-cookies-consent .u-sheet-1 {
    min-height: 131px;
  }

  .u-cookies-consent .u-layout-cell-1 {
    min-height: 125px;
  }

  .u-cookies-consent .u-text-1 {
    margin-right: 0;
  }

  .u-cookies-consent .u-text-2 {
    margin-right: 0;
  }

  .u-cookies-consent .u-layout-cell-2 {
    min-height: 125px;
  }
}

@media (max-width: 991px) {
  .u-cookies-consent .u-sheet-1 {
    min-height: 106px;
  }

  .u-cookies-consent .u-layout-cell-1 {
    min-height: 100px;
  }

  .u-cookies-consent .u-container-layout-1 {
    padding-left: 30px;
    padding-right: 30px;
  }

  .u-cookies-consent .u-layout-cell-2 {
    min-height: 100px;
  }
}

@media (max-width: 767px) {
  .u-cookies-consent .u-sheet-1 {
    min-height: 212px;
  }

  .u-cookies-consent .u-layout-cell-1 {
    min-height: 152px;
  }

  .u-cookies-consent .u-container-layout-1 {
    padding-left: 60px;
    padding-right: 60px;
  }

  .u-cookies-consent .u-text-1 {
    margin-right: 20px;
  }

  .u-cookies-consent .u-text-2 {
    margin-right: 20px;
  }

  .u-cookies-consent .u-layout-cell-2 {
    min-height: 152px;
  }
}

@media (max-width: 575px) {
  .u-cookies-consent .u-sheet-1 {
    min-height: 121px;
  }

  .u-cookies-consent .u-layout-cell-1 {
    min-height: 100px;
  }

  .u-cookies-consent .u-container-layout-1 {
    padding-left: 10px;
    padding-right: 10px;
  }

  .u-cookies-consent .u-text-2 {
    margin-right: 0;
  }

  .u-cookies-consent .u-layout-cell-2 {
    min-height: 15px;
  }

  .u-cookies-consent .u-container-layout-2 {
    padding-left: 10px;
    padding-right: 10px;
  }
}</style></section><span style="height: 64px; width: 64px; margin-left: 0px; margin-right: auto; margin-top: 0px; background-image: none; right: 55px; bottom: 20px; padding: 15px;" class="u-back-to-top u-custom-color-1 u-icon u-icon-circle u-opacity u-opacity-85" data-href="#">
        <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 551.13 551.13"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-1d98"></use></svg>
        <svg class="u-svg-content" enable-background="new 0 0 551.13 551.13" viewBox="0 0 551.13 551.13" xmlns="http://www.w3.org/2000/svg" id="svg-1d98"><path d="m275.565 189.451 223.897 223.897h51.668l-275.565-275.565-275.565 275.565h51.668z"></path></svg>
    </span>
  
</body></html>
<?php


 ?>