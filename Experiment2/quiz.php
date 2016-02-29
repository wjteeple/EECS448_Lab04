<?php
  $total = 0;

  $answer1 = $_POST["ans1"];
  $answer2 = $_POST["ans2"];
  $answer3 = $_POST["ans3"];
  $answer4 = $_POST["ans4"];
  $answer5 = $_POST["ans5"];

  echo "Question 1: How many states are there in the U.S.?<br>";
  echo "You answered: " . $answer1 . "<br>";
  echo "Correct answer: 50 <br>";
  if ($answer1 == "50")
  {
    $total += 20;
  }
  echo "<br>Question 2: What is 2 + 2?<br>";
  echo "You answered: " . $answer2 . "<br>";
  echo "Correct answer: 4 <br>";
  if ($answer2 == "4")
  {
    $total += 20;
  }
  echo "<br>Question 3: Which of the following cities is not in the U.K.?<br>";
  echo "You answered: " . $answer3 . "<br>";
  echo "Correct answer: Paris <br>";
  if ($answer3 == "Paris")
  {
    $total += 20;
  }
  echo "<br>Question 4: Which of the following is not an EECS major at KU?<br>";
  echo "You answered: " . $answer4 . "<br>";
  echo "Correct answer: Journalism <br>";
  if ($answer4 == "Journalism")
  {
    $total += 20;
  }
  echo "<br>Question 1: Who is teaching EECS 448 this semester?<br>";
  echo "You answered: " . $answer5 . "<br>";
  echo "Correct answer: Prof. Gibbons <br>";
  if ($answer5 == "Prof. Gibbons")
  {
    $total += 20;
  }
  echo "<br>Total Score: " . $total . "<br>";
?>
