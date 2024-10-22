<html>
<body>
<title> Om Prakash Nehra d789b8 </title>
<h1> Welcome to my guessing game</h1>

<?php

$url = "https://www.example.com";
$linkText = "Visit Example";
$correctnumber=26; //change this number //
if(isset($_GET['guess']))
{
  if (is_numeric($_GET['guess'])===FALSE)
 {
echo "Your guess is not a number";
}
else if ($_GET['guess']<$correctnumber)
 {
echo "Your guess is too low";
}
else if ($_GET['guess']>$correctnumber)
 {
echo "Your guess is too high";
}
else if ($_GET['guess']==$correctnumber)
 {
echo "Congratulations - You are right";
}
}
else
{
echo "Missing guess parameter <br> Your guess is too short";
}
?>

<a href="guess.php">Play the Guessing Game</a>

</body>
</html>
