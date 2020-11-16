<?php

$q1Answer = $_POST["capital"];
$q2Answer = $_POST["sport"];
$q3Answer = $_POST["stars"];
$q4Answer = $_POST["epa"];
$q5Answer = $_POST["mario"];
$submitButton = $_POST["submitButton"];
$score = 0;

//Checks to see if submission is done, then will reveal answers
if(isset($submitButton))
{
    //Question 1
    echo "Question 1: What was the capital of Spain?";
    echo "</br>";
    echo "You answered: " . $q1Answer . "</br>";
    echo "Correct answer: Madrid" . "</br>";
    if($q1Answer == "Madrid")
    {
        $score = $score + 1;
    }
    echo "</br>";
    //Question 2
    echo "Question 2: What is the most popular sport in the United States?";
    echo "</br>";
    echo "You answered: " . $q2Answer . "</br>";
    echo "Correct answer: Football" . "</br>";
    if($q2Answer == "Football")
    {
        $score = $score + 1;
    }
    echo "</br>";
    //Question 3
    echo "Question 3: How many stars are on the American Flag?";
    echo "</br>";
    echo "You answered: " . $q3Answer . "</br>";
    echo "Correct answer: 50" . "</br>";
    if($q3Answer == "50")
    {
        $score = $score + 1;
    }
    echo "</br>";
    //Question 4
    echo "Question 4: Which U.S. President created the Environmental Protection Agency (EPA)?";
    echo "</br>";
    echo "You answered: " . $q4Answer . "</br>";
    echo "Correct answer: Richard Nixon" . "</br>";
    if($q4Answer == "Richard_Nixon")
    {
        $score = $score + 1;
    }
    echo "</br>";
    //Question 5
    echo "Question 5: When was the original Super Mario Bros. game released in America?";
    echo "</br>";
    echo "You answered: " . $q5Answer . "</br>";
    echo "Correct answer: 1985" . "</br>";
    if($q5Answer == "1985")
    {
        $score = $score + 1;
    }
    echo "</br>";
    //Final Grade
    echo "You answered " . $score . " correctly." . "</br>";
    echo "You scored a " . ($score/5)*100 . "%." . "</br>";
}
?>