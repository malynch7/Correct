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
                <li><a href="">Play</a></li>
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

        $numberOfCards = 16;
        $gridSize = 4;

        class Card{

            var $face;
            var $match;
            var $flipped;
            var $matched;

            function __construct($face,$match){
                $this->face = $face;
                $this->match = $match;
                $this->flipped = 1;
                $this->matched = 0;
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
                array_push($deck, new Card("../images/GameDesign/card" . intdiv(($i *4) ,2) . $letter .
                    ".png", intdiv($i , 2)));
            }
            //shuffle($deck);

            //present new game button
            echo "<tr><td>
                    <br><br>
                    <form class=\"center\"method=\"post\" action=\"" . htmlspecialchars($_SERVER[PHP_SELF]) . "\">
                        <input type=\"hidden\" name=\"cards\" value=\"" . htmlspecialchars(serialize($deck)) . "\">
                        <input type=\"hidden\" name=\"start\" value=\"true\">
                        <input type=\"submit\" value=\"Play Now!\">
                    </form>
                   </td></tr>
                ";

        }else{

            //gameplay loop
            $deck = unserialize($_REQUEST["cards"]);

            echo "<tr><td>
                    <br><br>
                        <table class='center'>";
            for($i = 0; $i < $gridSize; $i++){
                echo "<tr class='center'>";
                for($j = 0; $j < $gridSize; $j++){
                    if($deck[($i + $j)]->flipped == 1){
                        echo "<td><img src='" . $deck[(($i * 4) + $j)]->face ."' class='center'></td>";
                    }else{
                        echo "<td><img src='../images/GameDesign/backside_of_card.png' class='center'></td>";
                    }

                }
                echo "</tr>";
            }
            echo "        </table>
                    
                 </td></tr>";


        }
    ?>
</table>



</body>

</html>
