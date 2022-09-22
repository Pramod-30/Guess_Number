<!DOCTYPE html>
<html>
    <head>
        <title>Guess The Number</title>
        <style>
            body{
                background-image:url('numberback2.jpg');
                background-size:cover;
                background-repeat: no-repeat;
                text-align:center;
                font-weight:bold;
                font-size:40px;
                width:99%;
            }
            .ipclas{
                height:100px;
                width:150px;
                font-size:50px;
                background-color:blue;
                opacity:0.80;
            }
            .ecocls1{
                color:red;
                background-color:yellow;
                opacity:0.80;
            }
            .ecocls2{
                color:green;
                background-color:yellow;
                opacity:0.80;
            }
            .pclas{
                background-color:red;
                color:yellow;
                opacity:0.90;
            }
            </style>
    </head>
    <body>   
<form action="" method="POST">
<p class="pclas">Guess a Number Between 0 and 9:</p>
                                                        <br>
<input class="ipclas" id="btn1" type="submit" name="submit" value="1"/>
<input class="ipclas" id="btn2" type="submit" name="submit" value="2"/>
<input class="ipclas" id="btn3" type="submit" name="submit" value="3"/><br>
<input class="ipclas" id="btn4" type="submit" name="submit" value="4"/>
<input class="ipclas" id="btn5" type="submit" name="submit" value="5"/>
<input class="ipclas" id="btn6" type="submit" name="submit" value="6"/><br>
<input class="ipclas" id="btn7" type="submit" name="submit" value="7"/>
<input class="ipclas" id="btn8" type="submit" name="submit" value="8"/>
<input class="ipclas" id="btn9" type="submit" name="submit" value="9"/><br>
<input class="ipclas" id="btn0" type="submit" name="submit" value="0"/><br>
</form>
<p style="color:red">Result:</p> 
<?php 
if(isset($_POST['submit'])){
$submitbutton = $_POST['submit'];
$randomnumber= mt_rand(0,9);
if ($submitbutton != $randomnumber)
{
echo "<p class='ecocls1'>"."Incorrect guess, but the correct number was $randomnumber. Try again and your guess was $submitbutton"."</p>";
}
else 
{
echo "<p class='ecocls2'>"."$randomnumber is the correct guess.Congrats! You won."."</p>";
}
}
?>
<body>
    </html>