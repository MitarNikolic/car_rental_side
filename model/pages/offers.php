<!DOCTYPE html>
<html lang="en">
<?php
session_start(); 
$_SESSION['currPage'] = '../model/pages/offers.php';
include '../header.php'; 
printHeader(false); 
?>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
     <?php
      include '../preloader.php'; 
      include '../navigation.php'; 
      printNavigation(false); 
     ?>
          <div class="container">
               <div class="text-center">
                    <h1>Offers</h1>
                    <br>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, alias.</p>
               </div>
          </div>
     </section>

     <section class="section-background">
          <div class="container">
               <div class="row">
               <?php
               function printColumn(string $imageName)  {
                         echo '<div class="col-md-4 col-sm-4">
                              <div class="courses-thumb courses-thumb-secondary">
                                   <div class="courses-top">
                                        <div class="courses-image">
                                             <img src="../../view/images/'.$imageName.'" class="img-responsive" alt="">
                                        </div>
                                   </div>
                              </div>
                         </div>'; 
               }
               printColumn('offer-1-720x480.jpg'); 
               printColumn('offer-2-720x480.jpg'); 
               printColumn('offer-3-720x480.jpg'); 
               printColumn('offer-4-720x480.jpg'); 
               printColumn('offer-5-720x480.jpg'); 
               printColumn('offer-6-720x480.jpg'); 
               ?>
               </div>
          </div>
     </section>
     <?php
    include '../footer.php'; 
    printFooter(false); 
    ?>
</body>
</html>