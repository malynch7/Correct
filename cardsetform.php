<html>

<head>
    <title>Card Set Form</title>
    <link rel="stylesheet" type="text/css" href="stylesheetproject1.css">
    <style>
        .error {
            color: #FF0000;
        }
    </style>

    <head>

    <body>
        <h1>Make Your Own Custom Card Set</h1>
        <form action="cardsetform.php" method="post">
            <table style="width:100%">
                <tr>
                    <th>Questions 1-16</th>
                    <th>Answers 1-16</th>
                </tr>
                <tr>
                    <td align="center">
                        <textarea name="card1q" rows="10" cols="40" required>



        </textarea>
                    </td>
                    <td align="center">
                        <textarea name="card1a" rows="10" cols="40" required>



                </textarea>
                    </td>
                </tr>
                <tr>
                    <td align="center"> 
                        <textarea name="card2q" rows="10" cols="40" required>



        </textarea>
                    </td>
                    <td align="center">
                        <textarea name="card2a" rows="10" cols="40" required>



                </textarea>
                    </td>
                </tr>
                <tr>
                    <td align="center">
                        <textarea name="card3q" rows="10" cols="40" required>



        </textarea>
                    </td>
                    <td align="center">
                        <textarea name="card3a" rows="10" cols="40" required>



                </textarea>
                    </td>
                </tr>
                <tr>
                    <td align="center">
                        <textarea name="card4q" rows="10" cols="40" required>



        </textarea>
                    </td>
                    <td align="center">
                        <textarea name="card4a" rows="10" cols="40" required>



                </textarea>
                    </td>
                </tr>
                <tr>
                    <td align="center">
                        <textarea name="card5q" rows="10" cols="40" required>



        </textarea>
                    </td>
                    <td align="center">
                        <textarea name="card5a" rows="10" cols="40" required>



                </textarea>
                    </td>
                </tr>
                <tr>
                    <td align="center">
                        <textarea name="card6q" rows="10" cols="40" required>



        </textarea>
                    </td>
                    <td align="center">
                        <textarea name="card6a" rows="10" cols="40" required>



                </textarea>
                    </td>
                </tr>
                <tr>
                    <td align="center">
                        <textarea name="card7q" rows="10" cols="40" required>



        </textarea>
                    </td>
                    <td align="center">
                        <textarea name="card7a" rows="10" cols="40" required>



                </textarea>
                    </td>
                </tr>
                <tr>
                    <td align="center">
                        <textarea name="card8q" rows="10" cols="40" required>



        </textarea>
                    </td>
                    <td align="center">
                        <textarea name="card8a" required rows="10" cols="40">



                </textarea>
                    </td>
                </tr>
                <tr>
                    <td align="center">
                        <textarea name="card9q" required rows="10" cols="40">



        </textarea>
                    </td>
                    <td align="center">
                        <textarea name="card9a" required rows="10" cols="40">



                </textarea>
                    </td>
                </tr>
                <tr>
                    <td align="center">
                        <textarea name="card10q" required rows="10" cols="40">



        </textarea>
                    </td>
                    <td align="center">
                        <textarea name="card10a" required rows="10" cols="40">



                </textarea>
                    </td>
                </tr>
                <tr>
                    <td align="center">
                        <textarea name="card11q" required rows="10" cols="40">



        </textarea>
                    </td>
                    <td align="center">
                        <textarea name="card11a" required rows="10" cols="40">



                </textarea>
                    </td>
                </tr>
                <tr>
                    <td align="center">
                        <textarea name="card12q" required rows="10" cols="40">



        </textarea>
                    </td>
                    <td align="center">
                        <textarea name="card12a" required rows="10" cols="40">



                </textarea>
                    </td>
                </tr>
                <tr>
                    <td align="center">
                        <textarea name="card13q" required rows="10" cols="40">



        </textarea>
                    </td>
                    <td align="center">
                        <textarea name="card13a" required rows="10" cols="40">



                </textarea>
                    </td>
                </tr>
                <tr>
                    <td align="center">
                        <textarea name="card14q" required rows="10" cols="40">



                </textarea>
                    </td>
                    <td align="center">
                        <textarea name="card14a" required rows="10" cols="40">



                        </textarea>
                    </td>
                </tr>
                <tr>
                    <td align="center">
                        <textarea name="card15q" required rows="10" cols="40">



        </textarea>
                    </td>
                    <td align="center">
                        <textarea name="card15a" required rows="10" cols="40">



                </textarea>
                    </td>
                </tr>
                <tr>
                    <td align="center">
                        <textarea name="card16q" required rows="10" cols="40">



        </textarea>
                    </td>
                    <td align="center">
                        <textarea name="card16a" required rows="10" cols="40">



                </textarea>
                    </td>
                </tr>
            </table>
            <br>
            <br>
            <input type="submit" value="Play">
            <input type="reset" value="Reset">
            <input type="submit" value="Skip">
        </form>

        <!--
            <?php
                $card1q = $card2q = $card3q = $card4q = $card5q = $card6q = $card7q = $card8q = "";
                $card9q = $card10q = $card11q = $card12q = $card13q = $card14q = $card15q = $card16q = "";
                $card1a = $card2a = $card3a = $card4a = $card5a = $card6a = $card7a = $card8a = "";
                $card9a = $card10a = $card11a = $card12a = $card13a = $card14a = $card15a = $card16a = "";

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (empty($_POST["card1q"])) {
                      $card1qerror = "Card 1 Question is required";
                    } else {
                      $card1q = test_input($_POST["card1q"]);
            ?>

        <p><span class="error">* required field</span></p>
        card1q: <textarea name="Card 1 Question" rows="5" cols="40"><?php echo $comment;?>
        </textarea>
    <?php
        echo "<h2>Your Input:</h2>";
        echo $card1q;
        echo "<br>";
    ?>
    -->
    </body>

</html>