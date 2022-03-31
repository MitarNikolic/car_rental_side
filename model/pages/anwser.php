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

    <body>
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
            echo "<a href='#' onclick= \"GetAnswer('$split')\"><li>$split</li></a>"; 
        }
        echo '</ul>'; 
        ?>
        </div>
        <form method="POST">
            <h2>Question</h2>
            <textarea id="questionText" name="question" readonly>
            </textarea>
            <h2>Anwser</h2>
            <textarea id="questionText" name="question">
            </textarea>
            <input type="submit" text="Anwser" name="answer">
        </form>
        <?php
        include '../footer.php'; 
        printFooter(false); 
     ?>
    </body>
</html>

