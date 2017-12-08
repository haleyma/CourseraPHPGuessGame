<title>Maureen Haley</title>
<body>
  <h1>Welcome to my Guessing Game!</h1>


<p>
<?php
$guess = "Maureen";

if(!isset($guess)){
  echo "Missing guess parameter.";
} elseif(is_int($guess) == 0){
  echo "Your guess is not a number.";
} elseif($guess == 47){
echo "Congratulations - You are right.";
} elseif ($guess < 47){
  echo "Your guess is too low.";
} elseif ($guess > 47){
  echo "Your guess is too high";
}


 ?>
</p>
</body>
