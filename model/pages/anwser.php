<!DOCTYPE html>
<html lang="en">
    <?php
    //Header
     session_start(); 
     $_SESSION['currPage'] = '../model/pages/contact.php';
     include '../header.php';
     printHeader(false); 

    //Reading
    $filename = '../../model/state_files/user_messages.txt'; 
    $filestream = fopen($filename, 'r'); 
    $fileContent = fread($filestream, filesize($filename)); 
    $_SESSION["fileContent"] = $fileContent;
    fclose($filestream); 
    ?>

    <body  id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
        <?php 
        include '../preloader.php'; 
        include '../navigation.php'; 
        printNavigation(false);
        ?>
        <script>
            function GetAnswer(fullInformation) {
                var parts = fullInformation.split(','); 
                console.log(fullInformation); 
                document.getElementById("questionText").value = parts[parts.length-1];
                return false;
            }
        </script>
        <div class="container">
               <div class="text-center">
                    <h1>User Questions</h1>
                    <br>
               </div>
          </div>
        
        <div class="questions">
            <?php
        //Displaying
        $fileContent = $_SESSION["fileContent"]; 
        $fileSplitContent = array_diff(explode(';', $fileContent), array("")); 
        echo '<ul>'; 
        foreach($fileSplitContent as $split){
            $inputFields = explode(',', $split);
            echo "<a href='#' onclick= \"GetAnswer('$split')\"><li>$inputFields[0], $inputFields[1]</li></a>"; 
        }
        echo '</ul>'; 
        ?>
        </div>

<section id="answer", class="contentSection">
    <div class="container">
         <div class="row">
              <div class="col-md-6 col-sm-12">
                   <form id="answer-form" role="form" action="" method="post">
                        <div class="col-md-12 col-sm-12">
                             <textarea class="form-control" rows="8" placeholder="The questions will appear here" name="question" readonly></textarea>
                             <textarea class="form-control" rows="8" name="answer" required></textarea>
                        </div>

                        <div class="col-md-4 col-sm-12">
                             <input type="submit" class="form-control" name="answer" value="Answer">
                        </div>

                   </form>
              </div>

              <div class="col-md-6 col-sm-12">
                   <div class="contact-image">
                        <img src="../../view/images/answer.png" class="img-responsive" alt="">
                   </div>
              </div>

         </div>
    </div>
</section> 
        <?php
        include '../footer.php'; 
        printFooter(false); 
        ?>
        <style>
            .contentSection{
                background-color: lightgreen; 
            }
        </style>
    </body>
</html>

