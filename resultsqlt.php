<!DOCTYPE html>
<html>
<head>
  <title>Results</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      padding: 20px;
    }
    
    h1 {
      text-align: center;
    }
    
    #results {
      max-width: 600px;
      margin: 0 auto;
      background-color: #ffffff;
      border: 1px solid #ccc;
      padding: 20px;
    }
    
    .correct {
      color: green;
    }
    
    .wrong {
      color: red;
    }
  </style>
</head>
<body>
  <h1>Results</h1>
  
  <div id="results">

<?php
// Define the correct answers
$correctAnswers = array(
    'q1' => 'c',
    'q2' => 'd',
    'q3' => 'c',
    'q4' => 'a',
    'q5' => 'b',
    'q6' => 'd',
    'q7' => 'c',
    'q8' => 'd',
    'q9' => 'b',
    'q10' => 'd',
    'q11' => 'c',
    'q12' => 'c',
    'q13' => 'a',
    'q14' => 'c',
    'q15' => 'd',
    'q16' => 'd',
    'q17' => 'c',
    'q18' => 'a',
    'q19' => 'b',
    'q20' => 'd'
);

// Initialize variables
$score = 0;
$wrongAnswers = array();

// Check the answers and calculate the score
foreach ($correctAnswers as $question => $correctAnswer) {
    if (isset($_POST[$question])) {
        $userAnswer = $_POST[$question];
        if ($userAnswer == $correctAnswer) {
            $score++;
        } else {
            $wrongAnswers[$question] = $userAnswer;
        }
    }
}

// Display the result
echo "<h2>Result:</h2>";
echo "<p>Your score: " . $score . "/" . count($correctAnswers) . "</p>";

// Display the wrong answers
if (!empty($wrongAnswers)) {
    echo "<h3>Wrong Answers:</h3>";
    foreach ($wrongAnswers as $question => $userAnswer) {
        echo "<p>Question " . substr($question, 1) . ": Your answer was " . $userAnswer . ", Correct answer was " . $correctAnswers[$question] . "</p>";
    }
}
?>
</div>
</body>
</html>


