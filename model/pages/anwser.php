<!DOCTYPE html>
<html lang="en">
    <?php
    //Reading
    $filename = '../../model/state_files/user_messages.txt'; 
    $filestream = fopen($filename, 'r'); 
    $fileContent = fread($filestream, filesize($filename)); 
    $_SESSION["fileContent"] = $fileContent;
    fclose($filestream); 
    ?>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>anwser</title>
    </head>
    <body>
        <script>
            function GetAnswer(fullInformation) {
                var parts = fullInformation.split(','); 
                console.log(fullInformation); 
                document.getElementById("questionText").value = parts[parts.length-1];
                return false;
            }
        </script>
        <div class="questions">
            <?php
        //Displaying
        $fileContent = $_SESSION["fileContent"]; 
        $fileSplitContent = array_diff(explode(';', $fileContent), array("")); 
        echo '<ul>'; 
        foreach($fileSplitContent as $split){
            echo "<a href='#' onclick= \"GetAnswer('$split')\"><li>$split</li></a>"; 
            //onclick="GetAnwser("sfsf,fnsadjf")"
        }
        echo '</ul>'; 
        ?>
        </div>
        <form method="POST">
            <h2>Question</h2>
            <textarea id="questionText" name="question" readonly>
            </textarea>
            <h2>Anwser</h2>
            <textarea id="questionText" name="question" readonly>
            </textarea>
            <input type="submit" text="Anwser" name="answer">
        </form>
    </body>
</html>

