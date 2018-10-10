<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hey Jude - PHP (version by Marc)</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
        $titlevalue = 1;
        function writeTitle() {
            $title = "Hey Jude";
            echo $title;
        }

        function writeDont() {
            $statementDont = ", don't ";
            echo $statementDont;
        }
        /*
        function writeVerseP4() {
            $verseP4 = array(" take a sad song and make it better", " you are made to go out and get her", " you have found her, now go and get her");
            //echo $verseP4[0];
            foreach ($verseP4 as $vb) {
                echo "$vb";
            }
        }
        */
        function writeRememberto() {
            $statementRememberto = "remember to ";
            echo $statementRememberto;
        }

        function writeThenYou() {
            $statementThenYou = "then you ";
            echo $statementThenYou;
        }

        function writeToMakeItBetter() {
            $statementToMakeItBetter = " to make it better ";
            echo $statementToMakeItBetter;
        }

        function writeWaaaaa() {
            $statementWaaaaa = " waaaaa ";
            echo $statementWaaaaa;
        }

        //calling the function writeTitle
        writeTitle();
        echo "<br>";
        echo "<br>";

        //$startingPoint = "Hey Jude ";
        //$statementDont = ", don't ";

        for ($titlevalue = 1; $titlevalue == 1; $titlevalue ++) {
            //writeTitle();
            

            $verseP3 = array(" make it bad", " be afraid", " let me down");
            $verseP4 = array(" take a sad song and make it better", " you were made to go out and get her", " you have found her, now go and get her");
            $verseP5 = array(" let her into your heart", " let her under your skin");
            $verseP6 = array(" can start", " begin");

            foreach ($verseP3 as $va) {
                writeTitle();
                writeDont();
                echo "$va";
                //echo "-----------";
                //writeVerseP4();

                echo "<br>";
                
                if ($va == " make it bad") {
                    echo $verseP4[0];
                }
                elseif ($va == " be afraid") {
                    echo $verseP4[1];
                }
                elseif ($va == " let me down") {
                    echo $verseP4[2];
                }
                
                /*
                foreach ($verseP3 as $vb) {
                    if ($verseP3 == " make it bad") {
                        echo $verseP4[1];
                    }
                    //echo "$vb";
                }
                */
                echo "<br>";
                writeRememberto();
                //echo "<br>";

                if ($va == " make it bad") {
                    echo $verseP5[0];
                    echo "<br>";
                    writeThenYou();
                    echo $verseP6[0];
                    writeToMakeItBetter();
                    echo "<br>";
                    for ($bt = 1; $bt < 6; $bt++) {
                        echo "better ";
                    }
                    writeWaaaaa();
                    echo "<br>";
                    for ($na = 1; $na < 9; $na++) {
                        echo "na ";
                    }
                    writeTitle();
                }
                elseif ($va == " be afraid") {
                    echo $verseP5[1];
                    echo "<br>";
                    writeThenYou();
                    echo $verseP6[1];
                    writeToMakeItBetter();
                    echo "<br>";
                    for ($bt = 1; $bt < 6; $bt++) {
                        echo "better ";
                    }
                    writeWaaaaa();
                    echo "<br>";
                    for ($na = 1; $na < 9; $na++) {
                        echo "na ";
                    }
                    writeTitle();
                }
                elseif ($va == " let me down") {
                    echo $verseP5[0];
                    echo "<br>";
                    writeThenYou();
                    echo $verseP6[0];
                    writeToMakeItBetter();
                    echo "<br>";
                    for ($bt = 1; $bt < 6; $bt++) {
                        echo "better ";
                    }
                    writeWaaaaa();
                    echo "<br>";
                    for ($na = 1; $na < 9; $na++) {
                        echo "na ";
                    }
                    writeTitle();
                }
                echo "<br>";
                echo "<br>";
            }
            echo "<br>";

            //echo $verseP3[1];

            /*
            if ($startingPoint = "Hey Jude") {
                $verse = $startingPoint;
                echo $verse;

                $versesarray = array(" make it bad", " be afraid", " let me down");

                foreach ($versesarray as $va) {
                    echo "$va<br>";
                }
                */

                /*
                $pv = 1;
                while ($pv == 1) {
                    echo "make it bad";
                    $pv = $pv + 1;
                }
                $pv = 2;
                if ($pv = 2) {
                    echo ".....";
                }
                */
                /*
            }
            echo "Blah <br>";
            */
        }

        /*
        $plural = 's';
        foreach (range(99, 1) as $i) {
            echo "$i bottle$plural of beer on the wall,\n";
            echo "$i bottle$plural of beer!\n";
            echo "Take one down, pass it around!\n";
            if ($i - 1 == 1)
            $plural = '';
 
            if ($i > 1)
                echo ($i - 1) . " bottle$plural of beer on the wall!\n\n";
            else
                echo "No more bottles of beer on the wall!\n";
        }
        */
    ?>

</body>
</html>