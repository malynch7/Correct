<!DOCTYPE html>
<html lang="en">
<head>
    <title>Card Set Form</title>
    <link rel="stylesheet" type="text/css" href="stylesheetproject1.css">
    <style>
        .error {
            color: #FF0000;
        }
    </style>
    </head>

    <body>

    <?php
        $queErr = $ansErr = "";
        $card1q = $card1a = $card2q = $card2a = $card3q = $card3a = $card4q = $card4a = $card5q = $card5a = $card6q = $card6a = "";   
        $successful = "Submitted Successfully ";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["card1q"])) {
                $queErr = "Question is required";
              } else {
                $card1q = test_input($_POST["card1q"]);
              }

              if (empty($_POST["card1a"])) {
                $ansErr = "Answer is required";
              } else {
                $card1a= test_input($_POST["card1a"]);
              }

              if (empty($_POST["card2q"])) {
                $queErr = "Question is required";
              } else {
                $card2q= test_input($_POST["card2q"]);
              }

              if (empty($_POST["card2a"])) {
                $ansErr = "Answer is required";
              } else {
                $card2a= test_input($_POST["card2a"]);
              }

              if (empty($_POST["card3q"])) {
                $queErr = "Question is required";
              } else {
                $card3q= test_input($_POST["card3q"]);
              }
            
              if (empty($_POST["card3a"])) {
                $ansErr = "Answer is required";
              } else {
                $card3a= test_input($_POST["card3a"]);
              }

              if (empty($_POST["card4q"])) {
                $queErr = "Question is required";
              } else {
                $card4q= test_input($_POST["card4q"]);
              }

              if (empty($_POST["card4a"])) {
                $ansErr = "Answer is required";
              } else {
                $card4a= test_input($_POST["card4a"]);
              }

              if (empty($_POST["card5q"])) {
                $queErr = "Question is required";
              } else {
                $card5q= test_input($_POST["card5q"]);
              }

              if (empty($_POST["card5a"])) {
                $ansErr = "Answer is required";
              } else {
                $card5a= test_input($_POST["card5a"]);
              }

              if (empty($_POST["card6q"])) {
                $queErr = "Question is required";
              } else {
                $card6q= test_input($_POST["card6q"]);
              }

              if (empty($_POST["card6a"])) {
                $ansErr = "Answer is required";
              } else {
                $card6a= test_input($_POST["card6a"]);
              }
          }

            function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
              }
        ?>

<table id="mainframe">
        <tr>
        <td>
            <ul>
                <li><a href="Correct.html">Home</a></li>
                <li><a href="Login.php">Play</a></li>
                <li><a href="howtoplay.html">How to play</a></li>
                <li><a href="youtube.html">YouTube Video</a></li>
                <li><a href="aboutcontributors.html">About Contributors</a></li>
				<li class="liclass"> <a href="https://github.com/malynch7/Web-Programming-Project-2">GitHub Repository</a></li>
            </ul>
        </td>
    </tr>
            </table>

      <h1>Make Your Own Custom Card Set</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

        Card 1 Question: <input type="text" name="card1q" size="100" required>
        <br><br>

        Card 1 Answer:  &nbsp; <input type="text" name="card1a" size="100" required>
        <br><br>

        Card 2 Question: <input type="text" name="card2q" size="100" required>
        <br><br>

        Card 2 Answer: &nbsp;  <input type="text" name="card2a" size="100" required>
        <br><br>

        Card 3 Question: <input type="text" name="card3q" size="100" required>
        <br><br>

        Card 3 Answer: &nbsp;  <input type="text" name="card3a" size="100" required>
        <br><br>

        Card 4 Question: <input type="text" name="card4q" size="100" required>
        <br><br>

        Card 4 Answer:  &nbsp; <input type="text" name="card4a" size="100" required>
        <br><br>

        Card 5 Question: <input type="text" name="card5q" size="100" required>
        <br><br>

        Card 5 Answer: &nbsp;  <input type="text" name="card5a" size="100" required>
        <br><br>

        Card 6 Question: <input type="text" name="card6q" size="100" required>
        <br><br>

        Card 6 Answer: &nbsp;  <input type="text" name="card6a" size="100" required>
        <br><br>
            <input type="submit" name="submit" value="Submit"> 
            <input type="reset" value="Reset">
        <br><br>
        </form>

        <?php
        if (count($_POST)>0) {
        echo $successful;
        echo '<a href="game/PlayCorrect.php">Play Now</a>';
        }
        ?>

    </body>
</html>