<!DOCTYPE html>
<html lang="en">
     <?php
     include './model/header.php'; 
     printHeader(true); 
     ?>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">
               <span class="spinner-rotate"></span>
          </div>
     </section>

     <?php 
     include 'model/navigation.php';
     printNavigation(true); 
     ?>

     <!-- HOME -->
     <section id="home">
          <div class="row">
               <div class="owl-carousel owl-theme home-slider">
                    <?php
                    
                    function createOwlSliderColumn(string $className, string $headerContent, string $subHeaderContent){
                         echo '<div class="item '.$className.'">
                         <div class="caption">
                              <div class="container">
                                   <div class="col-md-6 col-sm-12">
                                        <h1>'.$headerContent.'</h1>
                                        <h3>'.$subHeaderContent.'</h3>
                                   </div>
                              </div>
                         </div>
                    </div>'; 
                    }
                    createOwlSliderColumn('item-first', 'Lorem ipsum dolor sit amet.', 'Voluptas dignissimos esse, explicabo cum fugit eaque, perspiciatis quia ab nisi sapiente delectus eiet.'); 
                    createOwlSliderColumn('item-second', 'Distinctio explicabo vero animi culpa facere voluptatem.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, excepturi.')
                    ?>
                    <div class="item item-third">
                         <div class="caption">
                         </div>
                    </div>
               </div>
          </div>
     </section>

     <main>
          <section>
               <div class="container">
                    <div class="row">
                         <div class="col-md-12 col-sm-12">
                              <div class="text-center">
                                   <h2>About us</h2>

                                   <br>

                                   <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore molestias ipsa veritatis nihil iusto maiores natus dolor, a reiciendis corporis obcaecati ex. Totam assumenda impedit aut eum, illum distinctio saepe explicabo. Consequuntur molestiae similique id quos, quasi quas perferendis laboriosam, fugit natus odit totam! Id dolores saepe, sint debitis rerum dolorem tempora aliquid, pariatur enim nisi. Quia ab iusto assumenda.</p>
                              </div>
                         </div>
                    </div>
               </div>
          </section>

          <section>
               <div class="container">
                    <div class="row">
                         <div class="col-md-12 col-sm-12">
                              <div class="section-title text-center">
                                   <h2>Offers <small>Lorem ipsum dolor sit amet.</small></h2>
                              </div>
                         </div>
                         <?php
                          function createTeamColumn(string $imageName, $description, int $price, $spanText){
                               echo '
                         <div class="col-md-4 col-sm-6">
                               <div class="team-thumb">
                                    <div class="team-image">
                                         <img src="view/images/'.$imageName.'" class="img-responsive" alt="">
                                    </div>
                                    <div class="team-info">
                                         <h3>'.$description.'</h3>
 
                                         <p class="lead"><small>from</small> <strong>$'.$price.'.</strong> <small>per weekend</small></p>
 
                                         <span>'.$spanText.'</span>
                                    </div>
                                    <div class="team-thumb-actions">
                                         <a href="model/pages/offers.php" class="section-btn btn btn-primary btn-block">View Offer</a>
                                        </div>
                                   </div>
                               </div>'; 
                          }
                          createTeamColumn('offer-1-720x480.jpg', 'FAMILY CARS', 120, 
                          'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum dicta voluptas quia dolor fuga odit.'); 
                          createTeamColumn('offer-2-720x480.jpg', 'LUXURY & PRESTIGE CARS', 99, 
                          'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non beatae soluta, placeat vitae cum maxime culpa itaque minima.'); 
                          createTeamColumn('offer-3-720x480.jpg', 'TOP SELLERS', 110, 
                          'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt nisi quia aspernatur, harum facere delectus saepe enim?'); 
                         ?>
                    </div>
               </div>
          </section>

          <section>
               <div class="container">
                    <div class="row">
                         <div class="col-md-12 col-sm-12">
                              <div class="section-title text-center">
                                   <h2>Latest Blog posts <small>Lorem ipsum dolor sit amet.</small></h2>
                              </div>
                         </div>

                         <div class="col-md-4 col-sm-4">
                              <div class="courses-thumb courses-thumb-secondary">
                                   <div class="courses-top">
                                        <div class="courses-image">
                                             <img src="images/blog-1-720x480.jpg" class="img-responsive" alt="">
                                        </div>
                                        <div class="courses-date">
                                             <span title="Author"><i class="fa fa-user"></i> John Doe</span>
                                             <span title="Date"><i class="fa fa-calendar"></i> 12/06/2020 10:30</span>
                                             <span title="Views"><i class="fa fa-eye"></i> 114</span>
                                        </div>
                                   </div>

                                   <div class="courses-detail">
                                        <h3><a href="blog-post-details.html">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h3>
                                   </div>

                                   <div class="courses-info">
                                        <a href="blog-post-details.html" class="section-btn btn btn-primary btn-block">Read More</a>
                                   </div>
                              </div>
                         </div>

                         <div class="col-md-4 col-sm-4">
                              <div class="courses-thumb courses-thumb-secondary">
                                   <div class="courses-top">
                                        <div class="courses-image">
                                             <img src="images/blog-2-720x480.jpg" class="img-responsive" alt="">
                                        </div>
                                        <div class="courses-date">
                                             <span title="Author"><i class="fa fa-user"></i> John Doe</span>
                                             <span title="Date"><i class="fa fa-calendar"></i> 12/06/2020 10:30</span>
                                             <span title="Views"><i class="fa fa-eye"></i> 114</span>
                                        </div>
                                   </div>

                                   <div class="courses-detail">
                                        <h3><a href="blog-post-details.html">Tempora molestiae, iste, consequatur unde sint praesentium!</a></h3>
                                   </div>

                                   <div class="courses-info">
                                        <a href="blog-post-details.html" class="section-btn btn btn-primary btn-block">Read More</a>
                                   </div>
                              </div>
                         </div>

                         <div class="col-md-4 col-sm-4">
                              <div class="courses-thumb courses-thumb-secondary">
                                   <div class="courses-top">
                                        <div class="courses-image">
                                             <img src="images/blog-3-720x480.jpg" class="img-responsive" alt="">
                                        </div>
                                        <div class="courses-date">
                                             <span title="Author"><i class="fa fa-user"></i> John Doe</span>
                                             <span title="Date"><i class="fa fa-calendar"></i> 12/06/2020 10:30</span>
                                             <span title="Views"><i class="fa fa-eye"></i> 114</span>
                                        </div>
                                   </div>

                                   <div class="courses-detail">
                                        <h3><a href="blog-post-details.html">A voluptas ratione, error provident distinctio, eaque id officia?</a></h3>
                                   </div>

                                   <div class="courses-info">
                                        <a href="blog-post-details.html" class="section-btn btn btn-primary btn-block">Read More</a>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </section>
          <section id="testimonial">
               <div class="container">
                    <div class="row">
                         <div class="col-md-12 col-sm-12">
                              <div class="section-title text-center">
                                   <h2>Testimonials <small>from around the world</small></h2>
                              </div>

                              <div class="owl-carousel owl-theme owl-client">
                                   <?php

                                   function createI(int $numberOfI){
                                        $returnI = ''; 
                                        for($i = 0; $i < $numberOfI; $i++){
                                              $returnI.'<i class="fa fa-star"></i>'; 
                                        }
                                        return $returnI; 
                                   }

                                   function createOwlClientColumn(int $numberOfI, string $imageName, string $person, string $position, string $paragraph){
                                        $i = createI($numberOfI); 
                                        echo '<div class="col-md-4 col-sm-4">
                                        <div class="item">
                                             <div class="tst-image">
                                                  <img src="view/images/'.$imageName.'" class="img-responsive" alt="">
                                             </div>
                                             <div class="tst-author">
                                                  <h4>'.$person.'</h4>
                                                  <span>'.$position.'</span>
                                             </div>
                                             <p>'.$paragraph.'</p>
                                             <div class="tst-rating">'.$i.'</div>
                                        </div>
                                   </div>'; 
                                   }
                                   createOwlClientColumn(5, 'tst-image-1-200x216.jpg', 'Jackson', 'Shopify Developer', 
                                   'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam voluptas, facilis adipisci dolorem exercitationem nemo aut error impedit repudiandae iusto.'); 
                                   createOwlClientColumn(3,'tst-image-2-200x216.jpg', 'Camila', 'Marketing Manager', 
                                   'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente error, unde eos laborum consequatur officiis perferendis vel debitis, dolore, 
                                   ipsum quibusdam culpa quisquam, reiciendis aspernatur.'); 
                                   createOwlClientColumn(4,'tst-image-3-200x216.jpg', 'Barbie', 'Art Director', 
                                   'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'); 
                                   createOwlClientColumn(4, 'tst-image-4-200x216.jpg', 'Andrio', 'Web Developer', 
                                   'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore natus culpa laudantium sit dolores quidem at nulla, iure atque laborum! Odit 
                                   tempora, enim aliquid at modi illum ducimus explicabo soluta.'); 
                                   ?>

                              </div>
                        </div>
                    </div>
               </div>
          </section> 
     </main>

     <!-- CONTACT -->
     <section id="contact">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">
                         <form id="contact-form" role="form" action="control/contact-us-controller.php" method="post" target="_self">
                              <div class="section-title">
                                   <h2>Contact us <small>we love conversations. let us talk!</small></h2>
                              </div>

                              <div class="col-md-12 col-sm-12">
                                   <input type="text" class="form-control" placeholder="Enter full name" name="name" required>
                                   <input type="email" class="form-control" placeholder="Enter email address" name="email" required>
                                   <textarea class="form-control" rows="6" placeholder="Tell us about your message" name="message" required></textarea>
                              </div>

                              <div class="col-md-4 col-sm-12">
                                   <input type="submit" class="form-control" name="send message" value="Send Message">
                              </div>

                         </form>
                    </div>

                    <div class="col-md-6 col-sm-12">
                         <div class="contact-image">
                              <img src="view/images/contact-1-600x400.jpg" class="img-responsive" alt="Smiling Two Girls">
                         </div>
                    </div>

               </div>
          </div>
     </section>       
   
   <?php
    include 'model/footer.php';
    printFooter(true); 
    ?>
</body>
</html>