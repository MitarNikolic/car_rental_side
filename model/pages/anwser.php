<!DOCTYPE html>
<html lang="en">
    <?php
      include '../../control/state-file-controller.php'; 
    //Header
     session_start(); 
     $_SESSION['currPage'] = '../model/pages/anwser.php';
     include '../header.php';
     printHeader(false); 

    //Reading
    $questionFileContent = readStateFile('../state_files/user_messages.txt'); 
    $anwserFileContent = readStateFile('../state_files/user_answers.txt');  
    $_SESSION["questionFileContent"] = $questionFileContent;
    $_SESSION["answerFileContent"] = $anwserFileContent; 
    ?>

    <body  id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
        <?php 
        include '../preloader.php'; 
        include '../navigation.php'; 
        printNavigation(false);
        ?>
        <script>
            function GetAnswer(fullInformation, answer) {
                var parts = fullInformation.split('^');   
                document.getElementById("questionText").value = parts[parts.length-1];
                document.getElementById("questionId").value = parts[0];
                document.getElementById("answerText").value = answer; 
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
       $questionFileSplitContent = getFormattedStateFile($_SESSION["questionFileContent"], ';');
       $answerFileSplitContent = getFormattedStateFile($_SESSION["answerFileContent"], ';');
       $answers;   
        echo '<ul>'; 
        foreach($questionFileSplitContent as $questionSplit){ 
            $questionFields = getFormattedStateFile($questionSplit, '^');
            $question = $questionFields[1] ?? ""; 
            if($answerFileSplitContent != ""){
               $hasAnswer = false; 
               foreach($answerFileSplitContent as $answerSplit){
                    $answerFields = getFormattedStateFile($answerSplit, '^');
                      if(($answerFields[0] == $questionFields[0]) && isset($answerFields[0]) &&  $answerFields[0] != ""){
                         $answers[$questionFields[0]] = $answerFields[1];  
                         $hasAnswer = true; 
                      }
               }
            }
            if(!$hasAnswer){
               $answers[$questionFields[0]] = ""; 
            }
            if($question != ""){
               $id = $questionFields[0];  
               echo "<a href='#' onclick= \"GetAnswer('$questionSplit', '$answers[$id]')\"><li>$questionFields[0], $question</li></a>"; 
            }
        }
        echo '</ul>'; 
        ?>
        </div>

<section id="answer", class="contentSection">
    <div class="container">
         <div class="row">
              <div class="col-md-6 col-sm-12">
                   <form id="answer-form" role="form" action="../../control/answer-contoller.php" method="post">
                        <div class="col-md-12 col-sm-12">
                             <textarea class="form-control" name="question" id="questionText" rows="8" placeholder="The questions will appear here" readonly></textarea>
                             <textarea class="form-control" id="answerText" rows="8" name="answer" required></textarea>
                             <input type="hidden" id="questionId" name="questionId">
                        </div>

                        <div class="col-md-4 col-sm-12">
                             <input type="submit" class="form-control" name="answerButton" value="Answer">
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

