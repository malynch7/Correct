<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>How to Play</title>
    <link rel="stylesheet" type="text/css" href="PlayCorrect.css">
    <link rel="stylesheet" type="text/css" href="../stylesheetproject1.css">
</head>

<body>

<table id="mainframe">
    <tr>
        <td>
            <ul>
                <li><a class="active" href="../Correct.html">Home</a></li>
                <li><a class="active" href="">Play</a></li>
                <li><a href="../howtoplay.html">How to play</a></li>
                <li><a href="../youtube.html">YouTube Video</a>
                <li><a href="../aboutcontributors.html">About Contributors</a></li>
                <li class="liclass"> <a href="https://github.com/malynch7/Web-Programming-Project-1">GitHub Repository</a></li>
            </ul>
        </td>
    </tr>
    <tr>
        <td><h1>Correct!</h1></td>
    </tr>
    <?php

        $gridHeight = 3;
        $gridWidth = 4;
        $numberOfCards = $gridHeight * $gridWidth;

        class Card{

            var $face;
            var $match;
            var $flipped;
            var $matched;

            function __construct($face,$match){
                $this->face = $face;
                $this->match = $match;
                $this->flipped = false;
                $this->matched = false;
            }
            function toString(){
                return $this->face . $this->match . $this->flipped . $this->matched ;
            }
        }

        if (!isset($_REQUEST["cards"])){

            //create card deck
            $deck = array();
            $letter;
            for($i = 0; $i < $numberOfCards; $i++){
                if(($i % 2) == 0){
                    $letter = "A";
                }else{
                    $letter = "B";
                }
                array_push($deck, new Card("../images/GameDesign/card" . intdiv($i ,2) . $letter .
                    ".png", intdiv($i , 2)));
            }
            shuffle($deck);

            //present new game button
            echo "<tr><td>
                    <br><br>
                    <form class=\"center\"method=\"post\" action=\"" . htmlspecialchars($_SERVER[PHP_SELF]) . "\">
                        <input type=\"hidden\" name=\"cards\" value=\"" . htmlspecialchars(serialize($deck)) . "\">
                        <input type='hidden' name='firstFlipped' value='-1'>
                        <input type='hidden' name='cardFlipped' value='-1'>
                        <input type=\"submit\" value=\"Play Now!\">
                    </form>
                   </td></tr>
                ";

        }else{

            //gameplay loop
            $deck = unserialize($_REQUEST["cards"]);
            $matchMade = 0;
            $firstFlipped = $_REQUEST["firstFlipped"];
            //check for match
            if($_REQUEST["cardFlipped"] != -1){
                if($firstFlipped == -1){
                    $firstFlipped = $_REQUEST["cardFlipped"];
                    $deck[$firstFlipped]->flipped = true;
                }elseif($deck[$firstFlipped]->match == $deck[$_REQUEST["cardFlipped"]]->match){
                    $matchMade = 1;
                    $deck[$firstFlipped]->matched = true;
                    $deck[$_REQUEST["cardFlipped"]]->matched = true;
                    $deck[$_REQUEST["cardFlipped"]]->flipped = true;
                }else{
                    $matchMade = 2;
                    $deck[$_REQUEST["cardFlipped"]]->flipped = true;
                }

            }
            $score = 0;
            foreach($deck as $card){
                if($card->matched == true){
                    $score++;
                }
            }

            //display cards
            echo "<tr><td>
                    <br><br>
                        <table class='center'>";
            for($i = 0; $i < $gridHeight; $i++){
                echo "<tr class='center'>";
                for($j = 0; $j < $gridWidth; $j++){
                    if($deck[($i * $gridWidth) + $j]->flipped == true){
                        echo "<td><img src='" . $deck[(($i * $gridWidth) + $j)]->face ."' class='center'></td>";
                    }elseif($matchMade == 0){
                        echo "<td><form class=\"center\"method=\"post\" action=\"" . htmlspecialchars($_SERVER[PHP_SELF]) . "\">
                                <input type=\"hidden\" name=\"cards\" value=\"" . htmlspecialchars(serialize($deck)) . "\">
                                <input type='hidden' name='cardFlipped' value='" . (($i * $gridWidth) + $j) . "'>
                                <input type='hidden' name='firstFlipped' value='" . $firstFlipped . "'>
                                <input type='image' alt=\"submit\" src='../images/GameDesign/backside_of_card.png'>
                             </form></td>";
                    }else{
                        echo "<td><img src='../images/GameDesign/backside_of_card.png' class='center'></td>";
                    }
                }
                echo"</tr>";
            }
            echo "</table></td>";

           //win condition
            if($score == $numberOfCards){
                echo "<td><br><br>
                      <p class='center'>You Have Won!</p>
                      <br>
                      <form class=\"center\"method=\"post\" action=\"" . htmlspecialchars($_SERVER[PHP_SELF]) . "\">
                                <input type='submit' value='Play Again'>
                             </form></td>";
            //Match made
            }elseif($matchMade == 1){
                echo "<td><br><br>
                      <p class='center'>You Found a Match!</p>
                      <br>
                      <form class=\"center\"method=\"post\" action=\"" . htmlspecialchars($_SERVER[PHP_SELF]) . "\">
                                <input type=\"hidden\" name=\"cards\" value=\"" . htmlspecialchars(serialize($deck)) . "\">
                                <input type='hidden' name='firstFlipped' value='-1'>
                                <input type='hidden' name='cardFlipped' value='-1'>
                                <input type='submit' value='Continue'>
                             </form></td>";

            //match failed
            }elseif($matchMade == 2){
                $deck[$_REQUEST["cardFlipped"]]->flipped = false;
                $deck[$firstFlipped]->flipped = false;
                echo "<td><br><br>
                      <p class='center'>These Do Not Match</p>
                      <br>
                      <form class=\"center\"method=\"post\" action=\"" . htmlspecialchars($_SERVER[PHP_SELF]) . "\">
                                <input type=\"hidden\" name=\"cards\" value=\"" . htmlspecialchars(serialize($deck)) . "\">
                                <input type='hidden' name='firstFlipped' value='-1'>
                                <input type='hidden' name='cardFlipped' value='-1'>
                                <input type='submit' value='Continue'>
                             </form></td>";
            }
        }
    ?>
    </tr></table>



</body>

</html>
