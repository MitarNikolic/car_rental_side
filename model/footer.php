<?php

function printFooter(bool $isInRoot){
     $pathToFolder = '';
     $pathToRoot = '../../'; 
     if($isInRoot){
          $pathToFolder = './model/pages/';
          $pathToRoot = ''; 
     }
     echo '<footer id="footer">
     <div class="container">
          <div class="row">
     
               <div class="col-md-4 col-sm-6">
                    <div class="footer-info">
                         <div class="section-title">
                              <h2>Headquarter</h2>
                         </div>
                         <address>
                              <p>212 Barrington Court <br>New York, ABC 10001</p>
                         </address>
     
                         <ul class="social-icon">
                              <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                              <li><a href="#" class="fa fa-twitter"></a></li>
                              <li><a href="#" class="fa fa-instagram"></a></li>
                         </ul>
     
                         <div class="copyright-text"> 
                              <p>Copyright &copy; 2020 Company Name</p>
                              <p>Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a></p>
                         </div>
                    </div>
               </div>
     
               <div class="col-md-4 col-sm-6">
                    <div class="footer-info">
                         <div class="section-title">
                              <h2>Contact Info</h2>
                         </div>
                         <address>
                              <p>+1 333 4040 5566</p>
                              <p><a href="mailto:contact@company.com">contact@company.com</a></p>
                         </address>
     
                         <div class="footer_menu">
                              <h2>Quick Links</h2>
                              <ul>
                                   <li><a href="'.$pathToRoot.'index.php">Home</a></li>
                                   <li><a href="'.$pathToFolder.'about-us.php">About Us</a></li>
                                   <li><a href="'.$pathToFolder.'terms.php">Terms & Conditions</a></li>
                                   <li><a href="'.$pathToFolder.'contact.php">Contact Us</a></li>
                              </ul>
                         </div>
                    </div>
               </div>
     
               <div class="col-md-4 col-sm-12">
                    <div class="footer-info newsletter-form">
                         <div class="section-title">
                              <h2>Newsletter Signup</h2>
                         </div>
                         <div>
                              <div class="form-group">
                                   <form action="#" method="get">
                                        <input type="email" class="form-control" placeholder="Enter your email" name="email" id="email" required>
                                        <input type="submit" class="form-control" name="submit" id="form-submit" value="Send me">
                                   </form>
                                   <span><sup>*</sup> Please note - we do not spam your email.</span>
                              </div>
                         </div>
                    </div>
               </div>
               
          </div>
     </div>
     </footer>
     
     <div class="modal fade bs-example-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
     <div class="modal-dialog" role="document">
          <div class="modal-content">
               <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="gridSystemModalLabel">Book Now</h4>
               </div>
               
               <div class="modal-body">
                    <form action="#" id="contact-form" method="post">
                         <div class="row">
                              <div class="col-md-6">
                                   <input type="text" class="form-control" placeholder="Pick-up location" required>
                              </div>
     
                              <div class="col-md-6">
                                   <input type="text" class="form-control" placeholder="Return location" required>
                              </div>
                         </div>
     
                         <div class="row">
                              <div class="col-md-6">
                                   <input type="text" class="form-control" placeholder="Pick-up date/time" required>
                              </div>
     
                              <div class="col-md-6">
                                   <input type="text" class="form-control" placeholder="Return date/time" required>
                              </div>
                         </div>
                         <input type="text" class="form-control" placeholder="Enter full name" required>
     
                         <div class="row">
                              <div class="col-md-6">
                                   <input type="email" class="form-control" placeholder="Enter email address" required>
                              </div>
     
                              <div class="col-md-6">
                                   <input type="text" class="form-control" placeholder="Enter phone" required>
                              </div>
                         </div>
                    </form>
               </div>
     
               <div class="modal-footer">
                    <button type="button" class="section-btn btn btn-primary">Book Now</button>
               </div>
          </div>
     </div>
     </div>
     '; 
}



?>