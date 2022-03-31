<!DOCTYPE html>
<html lang="en">
<?php
     session_start(); 
     $_SESSION['currPage'] = '../model/pages/contact-us.php';
     include '../header.php';
     printHeader(false); 
?>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
     <?php
     include '../preloader.php';
     include '../navigation.php'; 
     printNavigation(false);
     ?>
     <section>
          <div class="container">
               <div class="text-center">
                    <h1>Contact Us</h1>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, alias.</p>
               </div>
          </div>
     </section>

     <?php
     include '../contact.php';
     printContact('../../'); 
     include '../footer.php'; 
     printFooter(false); 
     ?>
</body>
</html>