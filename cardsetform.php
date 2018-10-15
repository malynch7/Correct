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
      <h1>Make Your Own Custom Card Set</h1>
      <p><span class="error">* required field</span></p>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

        Card1q: <input type="text" name="card1q" size="100">
        <span class="error">* <?php echo $queErr;?></span>
        <br><br>

        Card1a: <input type="text" name="card1a" size="100">
        <span class="error">* <?php echo $ansErr;?></span>
        <br><br>

        Card2q: <input type="text" name="card2q" size="100">
        <span class="error">* <?php echo $queErr;?></span>
        <br><br>

        Card2a: <input type="text" name="card2a" size="100">
        <span class="error">* <?php echo $ansErr;?></span>
        <br><br>

        Card3q: <input type="text" name="card3q" size="100">
        <span class="error">* <?php echo $queErr;?></span>
        <br><br>

        Card3a: <input type="text" name="card3a" size="100">
        <span class="error">* <?php echo $ansErr;?></span>
        <br><br>

        Card4q: <input type="text" name="card4q" size="100">
        <span class="error">* <?php echo $queErr;?></span>
        <br><br>

        Card4a: <input type="text" name="card4a" size="100">
        <span class="error">* <?php echo $ansErr;?></span>
        <br><br>

        Card5q: <input type="text" name="card5q" size="100">
        <span class="error">* <?php echo $queErr;?></span>
        <br><br>

        Card5a: <input type="text" name="card5a" size="100">
        <span class="error">* <?php echo $ansErr;?></span>
        <br><br>

        Card6q: <input type="text" name="card6q" size="100">
        <span class="error">* <?php echo $queErr;?></span>
        <br><br>

        Card6a: <input type="text" name="card6a" size="100">
        <span class="error">* <?php echo $ansErr;?></span>
        <br><br>
            
            <input type="submit" name="submit" value="Submit"> 
            <input type="reset" value="Reset">
            <input type="submit" value="Back">
        </form>

        <?php
        echo "<h2>Your Input:</h2>";
        echo $card1q;
        echo "<br>";
        echo $card1a;
        echo "<br>";
        echo $card2q;
        echo "<br>";
        echo $card2a;
        echo "<br>";
        echo $card3q;
        echo "<br>";
        echo $card3a;
        echo "<br>";
        echo $card4q;
        echo "<br>";
        echo $card4a;
        echo "<br>";
        echo $card5q;
        echo "<br>";
        echo $card5a;
        echo "<br>";
        echo $card6q;
        echo "<br>";
        echo $card6a;
        echo "<br>";
        ?>  
    </body>

</html>