<?php

ob_start();
 include 'inc/header.php';
ob_end_clean();

Session::CheckSession();
$Player = new Player();
$logMsg = Session::get('logMsg');

class Player
{

    private $db;

    // Db __construct Method
    public function __construct()
    {
        $this->db = new Database();
    }

   
    public function selectAllPlayerData()
    {
        $sql = "SELECT * FROM players ORDER BY id_pl ";
        $stmt = $this->db->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
        
        
    }}


?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>List Footballer</title>
    <link rel="stylesheet" href="../cosmos_network.css" media="screen">
<link rel="stylesheet" href="List-Footballer.css" media="screen">
    <script class="u-script" type="text/javascript" src="../jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="../cosmos_network.js" defer=""></script>
    <meta name="generator" content="Cosmos_network 6.3.1, cosmos_network.com">
    <meta name="referrer" content="origin">
    <link rel="icon" href="../images/favicon.png">
    <link id="u-theme-google-font" rel="stylesheet" href="../fonts.css">
    <link id="u-page-google-font" rel="stylesheet" href="List-Footballer-fonts.css">
    
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "footballer",
		"logo": "images/logo-gest-eleven-gold.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="List Footballer">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body data-path-to-root="./" data-include-products="false" class="u-body u-stick-footer u-xxl-mode" data-lang="en">
    <!-- <header class="u-black u-clearfix u-header u-header" id="sec-216b"><div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-xl u-valign-middle-xxl u-sheet-1"> -->
        <!-- <a href="Home.html" class="u-image u-logo u-image-1" data-image-width="519" data-image-height="239" title="Home">
          <img src="../images/logo-gest-eleven-gold.png" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-one-level u-offcanvas u-menu-1">
          <div class="menu-collapse u-custom-font" style="font-size: 1rem; letter-spacing: 0px; font-family: Poppins;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#" data-lang-en="{&quot;content&quot;:&quot;<svg class=\&quot;u-svg-link\&quot; viewBox=\&quot;0 0 24 24\&quot;><use xmlns:xlink=\&quot;http://www.w3.org/1999/xlink\&quot; xlink:href=\&quot;#menu-hamburger\&quot;></use></svg><svg class=\&quot;u-svg-content\&quot; version=\&quot;1.1\&quot; id=\&quot;menu-hamburger\&quot; viewBox=\&quot;0 0 16 16\&quot; x=\&quot;0px\&quot; y=\&quot;0px\&quot; xmlns:xlink=\&quot;http://www.w3.org/1999/xlink\&quot; xmlns=\&quot;http://www.w3.org/2000/svg\&quot;>    <g>        <rect y=\&quot;1\&quot; width=\&quot;16\&quot; height=\&quot;2\&quot;></rect>        <rect y=\&quot;7\&quot; width=\&quot;16\&quot; height=\&quot;2\&quot;></rect>        <rect y=\&quot;13\&quot; width=\&quot;16\&quot; height=\&quot;2\&quot;></rect>    </g></svg>&quot;,&quot;href&quot;:&quot;#&quot;}">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div> -->
          <!-- <div class="u-custom-menu u-nav-container">
            <ul class="u-custom-font u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-custom-color-1 u-text-custom-color-1 u-text-hover-palette-2-base" href="Home.html" data-lang-en="{&quot;content&quot;:&quot;Home&quot;,&quot;href&quot;:&quot;Home.html&quot;}" style="padding: 10px 20px;">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-custom-color-1 u-text-custom-color-1 u-text-hover-palette-2-base" href="AboutUs.html" data-lang-en="{&quot;content&quot;:&quot;About Us&quot;,&quot;href&quot;:&quot;AboutUs.html&quot;}" style="padding: 10px 20px;">About Us</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-custom-color-1 u-text-custom-color-1 u-text-hover-palette-2-base" href="OurService.html" data-lang-en="{&quot;content&quot;:&quot;Our Service&quot;,&quot;href&quot;:&quot;OurService.html&quot;}" style="padding: 10px 20px;">Our Service</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-custom-color-1 u-text-custom-color-1 u-text-hover-palette-2-base" href="Espace.html" data-lang-en="{&quot;content&quot;:&quot;Espace&quot;,&quot;href&quot;:&quot;Espace.html&quot;}" style="padding: 10px 20px;">Espace</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-custom-color-1 u-text-custom-color-1 u-text-hover-palette-2-base" href="Contact.html" data-lang-en="{&quot;content&quot;:&quot;Contact Us&quot;,&quot;href&quot;:&quot;Contact.html&quot;}" style="padding: 10px 20px;">Contact</a>
</li></ul>
          </div> -->
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center-lg u-align-center-xl u-align-center-xxl u-align-left-md u-align-left-sm u-align-left-xs u-custom-font u-nav u-popupmenu-items u-spacing-5 u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.html" data-lang-en="{&quot;content&quot;:&quot;Home&quot;,&quot;href&quot;:&quot;Home.html&quot;}">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="AboutUs.html" data-lang-en="{&quot;content&quot;:&quot;About Us&quot;,&quot;href&quot;:&quot;AboutUs.html&quot;}">About Us</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="OurService.html" data-lang-en="{&quot;content&quot;:&quot;Our Service&quot;,&quot;href&quot;:&quot;OurService.html&quot;}">Our Service</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Espace.html" data-lang-en="{&quot;content&quot;:&quot;Espace&quot;,&quot;href&quot;:&quot;Espace.html&quot;}">Espace</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contact.html" data-lang-en="{&quot;content&quot;:&quot;Contact Us&quot;,&quot;href&quot;:&quot;Contact.html&quot;}">Contact</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
    <section class="u-align-center u-clearfix u-image u-shading u-section-1" id="sec-acb4" data-image-width="1500" data-image-height="1000">
      <div class="u-clearfix u-sheet u-valign-top-sm u-valign-top-xs u-sheet-1">
        <h1 class="u-custom-font u-text u-text-default u-text-2">Football Player List</h1> 
         <?php
        $Users = new Users();
        $invit = new Invit();
        $allPlayer = $Player->selectAllPlayerData();
         $allUser = $Users->selectAllUserData();
         $allInvit = $invit->selectAllInvitData();

          
            if ($allInvit && $allPlayer){
    
            $i = 0;
     
        
   
              ?>
        <!-- <a href="Dashboard.php" class="u-border-none u-btn u-button-style u-custom-color-1 u-btn-1">Administration</a>-->
        
   
        <!-- <div class="u-expanded-width u-list u-list-1">
          <div class="u-repeater u-repeater-1"> -->
            
        <?php
             
            foreach ($allPlayer as $Player) {  
                 $i++;
               foreach($allInvit as $value){
                            $valuename_pl=$value->id_pl;
                             $valuename_pl2=$value->id_pl2;
                 if (Session::get("id_invit") == $value->id_invit){  
                  $array = explode (",", $valuename_pl);
                  $array2 = explode (",", $valuename_pl2);
                        // print_r ($array);
                       if (in_array($Player->id_pl, $array) or in_array($Player->id_pl, $array2)){
               ?>
     
            <div class="u-align-center u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-1">
  <div  class="u-border-2 u-border-custom-color-1 u-hover-feature u-image u-image-circle u-image-2" data-image-width="240" data-image-height="240" data-href="player.php?id_pl=<?php echo $Player->id_pl; ?>" style="background-image: url('image/<?php echo $Player->image_logo ?>')">
                
              </div>                <h4 class="u-align-center u-text u-text-default u-text-2">
                  <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-body-alt-color u-btn-2" href="player.php?id_pl=<?php echo $Player->id_pl; ?>"><?php echo $Player->name_pl; ?></a>
                </h4>
                <p class="u-text u-text-custom-color-1 u-text-default u-text-3"> <?php echo $Player->position; ?></p>
              </div>
            </div>
          
            <?php
            }}}
          }
        }
        ?>
          
      
            
            <?php
        if(Session::get('id') == TRUE){
        if ($allPlayer && $allUser ) {
            $i = 0;
     
        
   
              ?>
             
                 <a href="Dashboard.php" class="u-border-none u-btn u-button-style u-custom-color-1 u-btn-1">Administration</a>
        <!-- <h1 class="u-custom-font u-text u-text-default u-text-1">Football Player List</h1> -->
           <div class="u-expanded-width u-list u-list-1">
          <div class="u-repeater u-repeater-1">
    
   
      
        <?php
             
            foreach ($allPlayer as $Player) {  
                 $i++;

              
               ?>
     
            <div class="u-align-center u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-1">
                <?php
                 foreach($allUser as $value){
                            $valuename_pl=$value->name_pl;
                 if (Session::get("id") == $value->id){  
                  $array = explode (",", $valuename_pl);
                        ?>
<div style="background-image: url('image/<?php echo $Player->image_logo ?>')" class="u-border-2 u-border-custom-color-1 u-hover-feature u-image u-image-circle u-image-2" data-image-width="240" data-image-height="240" 
                        <?php
                       if (in_array($Player->name_pl, $array)){
                                        ?>
                data-href="player.php?id_pl=<?php echo $Player->id_pl; ?>" 
           <?php
                       }
           ?>
           >
              </div>
                <h4 class="u-align-center u-text u-text-default u-text-2">
                  <a  class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-body-alt-color u-btn-2"

                   <?php
                       if (in_array($Player->name_pl, $array)){
                                        ?>
                   href="player.php?id_pl=<?php echo $Player->id_pl; ?>"
                     <?php
                       }
           ?>
                   
                   ><?php echo $Player->name_pl; ?></a>
                </h4>
                <p class="u-text u-text-custom-color-1 u-text-default u-text-3"> <?php echo $Player->position; ?></p>
              </div>
            </div>
            <?php
            }}}
          }
        }
        // }
      // }
         
            ?>
      
      </div>
          </div>
            <!-- <div class="u-align-center u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-2">
                <div alt="" class="u-border-2 u-border-custom-color-1 u-hover-feature u-image u-image-circle u-image-2" data-image-width="240" data-image-height="240" data-href="#"></div>
                <h4 class="u-align-center u-text u-text-default u-text-4">
                  <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-body-alt-color u-btn-3" href="#">Brighton Labeau</a>
                </h4>
                <p class="u-text u-text-custom-color-1 u-text-default u-text-5"> Center forward</p>
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-3">
                <div alt="" class="u-border-2 u-border-custom-color-1 u-hover-feature u-image u-image-circle u-image-3" data-image-width="240" data-image-height="240" data-href="#"></div>
                <h4 class="u-align-center u-text u-text-default u-text-6">
                  <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-body-alt-color u-btn-4" href="#"> Dylan&nbsp;Ouedraogo</a>
                </h4>
                <p class="u-text u-text-custom-color-1 u-text-default u-text-7"> Central defender</p>
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-4">
                <div alt="" class="u-border-2 u-border-custom-color-1 u-hover-feature u-image u-image-circle u-image-4" data-image-width="240" data-image-height="240" data-href="#"></div>
                <h4 class="u-align-center u-text u-text-default u-text-8">
                  <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-body-alt-color u-btn-5" href="#"> Ali&nbsp;Dembélé</a>
                </h4>
                <p class="u-text u-text-custom-color-1 u-text-default u-text-9"> Right back</p>
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-5">
                <div alt="" class="u-border-2 u-border-custom-color-1 u-hover-feature u-image u-image-circle u-image-5" data-image-width="240" data-image-height="240" data-href="#"></div>
                <h4 class="u-align-center u-text u-text-default u-text-10">
                  <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-body-alt-color u-btn-6" href="#"> Patrick&nbsp;Burner</a>
                </h4>
                <p class="u-text u-text-custom-color-1 u-text-default u-text-11"> Right back</p>
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-6">
                <div alt="" class="u-border-2 u-border-custom-color-1 u-hover-feature u-image u-image-circle u-image-6" data-image-width="240" data-image-height="240" data-href="#"></div>
                <h4 class="u-align-center u-text u-text-default u-text-12">
                  <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-body-alt-color u-btn-7" href="#"> Giovani&nbsp;Bamba</a>
                </h4>
                <p class="u-text u-text-custom-color-1 u-text-default u-text-13"> Defensive midfielder</p>
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-7">
                <div alt="" class="u-border-2 u-border-custom-color-1 u-hover-feature u-image u-image-circle u-image-7" data-image-width="1000" data-image-height="1000" data-href="#"></div>
                <h4 class="u-align-center u-text u-text-default u-text-14">
                  <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-body-alt-color u-btn-8" href="#"> Monsef&nbsp;Bakrar</a>
                </h4>
                <p class="u-text u-text-custom-color-1 u-text-default u-text-15"> Center forward</p>
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-8">
                <div alt="" class="u-border-2 u-border-custom-color-1 u-hover-feature u-image u-image-circle u-image-8" data-image-width="240" data-image-height="240" data-href="#"></div>
                <h4 class="u-align-center u-text u-text-default u-text-16">
                  <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-body-alt-color u-btn-9" href="#"><span class="u-icon"></span>&nbsp;​Rezki&nbsp;Hamroune
                  </a>
                </h4>
                <p class="u-text u-text-custom-color-1 u-text-default u-text-17"> Right winger</p>
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-9">
                <div alt="" class="u-border-2 u-border-custom-color-1 u-hover-feature u-image u-image-circle u-image-9" data-image-width="240" data-image-height="240" data-href="#"></div>
                <h4 class="u-align-center u-text u-text-default u-text-18">
                  <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-body-alt-color u-btn-10" href="#" target="_blank"> Alexis&nbsp;Guendouz</a>
                </h4>
                <p class="u-text u-text-custom-color-1 u-text-default u-text-19"> Goalkeeper</p>
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-10">
                <div alt="" class="u-border-2 u-border-custom-color-1 u-hover-feature u-image u-image-circle u-image-10" data-image-width="240" data-image-height="240" data-href="Lys-Mousset.html"></div>
                <h4 class="u-align-center u-text u-text-default u-text-20">
                  <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-body-alt-color u-btn-11" href="Lys-Mousset.html"> Lys&nbsp;Mousset</a>
                </h4>
                <p class="u-text u-text-custom-color-1 u-text-default u-text-21"> Center forward</p>
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-11">
                <div alt="" class="u-border-2 u-border-custom-color-1 u-hover-feature u-image u-image-circle u-image-11" data-image-width="240" data-image-height="240" data-href="#"></div>
                <h4 class="u-align-center u-text u-text-default u-text-22">
                  <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-body-alt-color u-btn-12" href="#"> Rudy&nbsp;Kohon</a>
                </h4>
                <p class="u-text u-text-custom-color-1 u-text-default u-text-23"> Central defender</p>
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-12">
                <div alt="" class="u-border-2 u-border-custom-color-1 u-hover-feature u-image u-image-circle u-image-12" data-image-width="240" data-image-height="240" data-href="#"></div>
                <h4 class="u-align-center u-text u-text-default u-text-24">
                  <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-body-alt-color u-btn-13" href="#"> Bilal&nbsp;Benkhedim</a>
                </h4>
                <p class="u-text u-text-custom-color-1 u-text-default u-text-25"> Attacking midfielder</p>
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-13">
                <div alt="" class="u-border-2 u-border-custom-color-1 u-hover-feature u-image u-image-circle u-image-13" data-image-width="597" data-image-height="539" data-href="#"></div>
                <h4 class="u-align-center u-text u-text-default u-text-26">
                  <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-body-alt-color u-btn-14" href="#">Wadhah Zaidi</a>
                </h4>
                <p class="u-text u-text-custom-color-1 u-text-default u-text-27"> Left Winger</p>
              </div>
            </div>-->
          </div>
        </div>
      </div> 
      
      
      
      
      
      
      
      
      
      
      
    </section>
    
    
    
    
    <footer class="u-align-center-sm u-align-center-xs u-clearfix u-footer u-grey-80 u-footer" id="sec-b461"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-align-center-xs u-hidden-lg u-hidden-md u-hidden-sm u-hidden-xl u-hidden-xxl u-text u-text-1">
          <span class="u-text-custom-color-1"> Phone : </span>+97143290545&nbsp; &nbsp;<span class="u-text-custom-color-1">Email :&nbsp;</span>contact@ges​televen.ae<br>
          <span class="u-text-custom-color-1">Address : </span>Dubai World Central - P.O Box 390667 -Dubaï United Arab Emirates
        </p>
        <a href="Home.html" class="u-align-center-xs u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xl u-align-left-xxl u-image u-logo u-image-1" data-image-width="519" data-image-height="239" title="Home">
          <img src="../images/logo-gest-eleven-gold.png" class="u-logo-image u-logo-image-1">
        </a>
        <p class="u-text u-text-default u-text-2" data-lang-en="<a class=&quot;u-active-none u-border-none u-btn u-button-link u-button-style u-custom-font u-hover-none u-none u-text-custom-color-1 u-block-control u-block-dc44-46&quot; data-href=&quot;2676003552&quot; style=&quot;background-image: none; font-family: Poppins; font-size: 1rem; padding-top: 0px; padding-bottom: 0px; padding-left: 0px; padding-right: 0px&quot; data-block=&quot;31&quot;>Home</a>">
          <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-custom-font u-hover-none u-none u-text-custom-color-1 u-btn-1" data-href="Home.html">Home</a>
        </p>
        <p class="u-text u-text-default u-text-3" data-lang-en="<a class=&quot;u-active-none u-border-none u-btn u-button-link u-button-style u-custom-font u-hover-none u-none u-text-custom-color-1 u-block-control u-block-dc44-47&quot; data-href=&quot;68773635&quot; style=&quot;background-image: none; font-family: Poppins; font-size: 1rem; padding-top: 0px; padding-bottom: 0px; padding-left: 0px; padding-right: 0px&quot; data-block=&quot;35&quot;>About Us</a>">
          <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-custom-font u-hover-none u-none u-text-custom-color-1 u-btn-2" data-href="AboutUs.html">About Us</a>
        </p>
        <p class="u-text u-text-default u-text-4" data-lang-en="<a class=&quot;u-active-none u-border-none u-btn u-button-link u-button-style u-custom-font u-hover-none u-none u-text-custom-color-1 u-block-control u-block-dc44-50&quot; data-href=&quot;732705830&quot; style=&quot;background-image: none; font-family: Poppins; font-size: 1rem; padding-top: 0px; padding-bottom: 0px; padding-left: 0px; padding-right: 0px&quot; data-block=&quot;37&quot;>Espace</a>">
          <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-custom-font u-hover-none u-none u-text-custom-color-1 u-btn-3" data-href="Espace.html">Espace</a>
        </p>
        <p class="u-text u-text-default u-text-5" data-lang-en="<a class=&quot;u-active-none u-border-none u-btn u-button-link u-button-style u-custom-font u-hover-none u-none u-text-custom-color-1 u-block-control u-block-dc44-48&quot; data-href=&quot;2222522517&quot; style=&quot;background-image: none; font-family: Poppins; font-size: 1rem; padding-top: 0px; padding-bottom: 0px; padding-left: 0px; padding-right: 0px&quot; data-block=&quot;33&quot;>Our Services</a>">
          <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-custom-font u-hover-none u-none u-text-custom-color-1 u-btn-4" data-href="OurService.html">Our Services</a>
        </p>
        <p class="u-text u-text-default u-text-6" data-lang-en="<a class=&quot;u-active-none u-border-none u-btn u-button-link u-button-style u-custom-font u-hover-none u-none u-text-custom-color-1 u-block-control u-block-dc44-49&quot; data-href=&quot;787417911&quot; style=&quot;background-image: none; font-family: Poppins; font-size: 1rem; padding-top: 0px; padding-bottom: 0px; padding-left: 0px; padding-right: 0px&quot; data-block=&quot;29&quot;>Contact&amp;nbsp;</a>">
          <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-custom-font u-hover-none u-none u-text-custom-color-1 u-btn-5" data-href="Contact.html">Contact&nbsp;</a>
        </p><!--position-->
        <div data-position="" class="u-hidden-xs u-position u-position-1"><!--block-->
          <div class="u-block u-indent-0 u-spacing-0">
            <div class="u-block-container u-clearfix" style=""><!--block_header-->
              <h5 class="u-block-header u-text" data-lang-en=""><!--block_header_content--><!--/block_header_content--></h5><!--/block_header--><!--block_content-->
              <div class="u-align-right u-block-content u-custom-font u-text u-text-8" data-lang-en="<!--block_content_content--><span class=&quot;u-text-custom-color-1&quot;>&amp;nbsp; &amp;nbsp;Phone :</span>&amp;nbsp;<br><span class=&quot;u-text-custom-color-1&quot;>&amp;nbsp; &amp;nbsp; &amp;nbsp;Email :</span>&amp;nbsp;<br><span class=&quot;u-text-custom-color-1&quot;>Address :</span>&amp;nbsp;<!--/block_content_content-->"><!--block_content_content-->
                <span class="u-text-custom-color-1">&nbsp; &nbsp;Phone :</span>&nbsp;<br>
                <span class="u-text-custom-color-1">&nbsp; &nbsp; &nbsp;Email :</span>&nbsp;<br>
                <span class="u-text-custom-color-1">Address :</span>&nbsp;<!--/block_content_content-->
              </div><!--/block_content-->
            </div>
          </div><!--/block-->
        </div><!--/position-->
        <p class="u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xs u-custom-font u-hidden-xs u-text u-text-9" data-lang-en="+97143290545<br>contact@gesteleven.ae<br>Dubai World Central<br>P.O Box 390667 -Dubaï United Arab Emirates">+97143290545<br>contact@ges​​​televen.ae<br>Dubai World Central<br>P.O Box 390667 -Dubaï United Arab Emirates
        </p>
        <p class="u-align-center u-custom-font u-text u-text-default u-text-10" data-lang-en="​<span class=&quot;u-file-icon u-icon u-text-white u-block-control&quot; style=&quot;&quot; data-block=&quot;44&quot;><img src=&quot;../images/9394452-d61c1e66.png&quot; alt=&quot;&quot; data-original-src=&quot;../images/9394452.png&quot; data-color=&quot;#000000&quot;></span>&amp;nbsp;Gesteleven 2024 - Developed by cosmos-network&amp;nbsp;"><span class="u-file-icon u-icon u-text-white"><img src="..images/9394452-d61c1e66.png" alt=""></span>&nbsp;Gesteleven 2024&nbsp;
        </p>
      </div></footer><section class="u-align-center u-clearfix u-cookies-consent u-grey-80 u-cookies-consent" id="sec-f82d">
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
  font-size: 1.5rem;
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
    min-height: 225px;
  }

  .u-cookies-consent .u-layout-cell-1 {
    min-height: 154px;
  }

  .u-cookies-consent .u-container-layout-1 {
    padding-left: 10px;
    padding-right: 10px;
    padding-bottom: 20px;
  }

  .u-cookies-consent .u-text-2 {
    font-size: 1rem;
  }

  .u-cookies-consent .u-layout-cell-2 {
    min-height: 65px;
  }

  .u-cookies-consent .u-container-layout-2 {
    padding: 10px;
  }
}

@media (max-width: 575px) {
  .u-cookies-consent .u-sheet-1 {
    min-height: 121px;
  }

  .u-cookies-consent .u-layout-cell-1 {
    min-height: 100px;
  }

  .u-cookies-consent .u-layout-cell-2 {
    min-height: 15px;
  }
}</style></section><span style="height: 64px; width: 64px; margin-left: 0px; margin-right: auto; margin-top: 0px; background-image: none; right: 55px; bottom: 20px; padding: 15px;" class="u-back-to-top u-custom-color-1 u-icon u-icon-circle u-opacity u-opacity-85" data-href="#">
        <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 551.13 551.13"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-1d98"></use></svg>
        <svg class="u-svg-content" enable-background="new 0 0 551.13 551.13" viewBox="0 0 551.13 551.13" xmlns="http://www.w3.org/2000/svg" id="svg-1d98"><path d="m275.565 189.451 223.897 223.897h51.668l-275.565-275.565-275.565 275.565h51.668z"></path></svg>
    </span>
  
</body></html>