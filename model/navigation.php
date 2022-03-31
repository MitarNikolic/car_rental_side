<?php

function printNavigation(bool $isInRoot){
     $pathToFolder = '';
     $pathToRoot = '../../'; 
     if($isInRoot){
          $pathToFolder = './model/pages/';
          $pathToRoot = ''; 
     }
     echo  ' <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
     <div class="container">
     
          <div class="navbar-header">
               <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
               </button>
     
               <!-- lOGO TEXT HERE -->
               <a href="#" class="navbar-brand">Car Rental Website</a>
          </div>

          <div class="collapse navbar-collapse">
               <ul class="nav navbar-nav navbar-nav-first">
                    <li><a href="'.$pathToRoot.'index.php">Home</a></li>
                    <li><a href="'.$pathToFolder.'offers.php">Offers</a></li>
                    <li class="dropdown">
                         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About<span class="caret"></span></a>
                         <ul class="dropdown-menu">
                              <li class="active"><a href="'.$pathToFolder.'about-us.php">About Us</a></li>
                         </ul>
                    </li>
                    <li><a href="'.$pathToFolder.'contact.php">Contact Us</a></li>
               </ul>
          </div>
     
     </div>
     </section>';
}
?>
