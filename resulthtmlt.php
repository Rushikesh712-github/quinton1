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
    $answers = array(
      'q1' => 'a',
      'q2' => 'a',
      'q3' => 'c',
      'q4' => 'a',
      'q5' => 'b',
      'q6' => 'c',
      'q7' => 'b',
      'q8' => 'b',
      'q9' => 'c',
      'q10' => 'a',
      'q11' => 'b',
      'q12' => 'c',
      'q13' => 'a',
      'q14' => 'b',
      'q15' => 'c',
      'q16' => 'a',
      'q17' => 'b',
      'q18' => 'c',
      'q19' => 'a',
      'q20' => 'b'
    );
    
    $totalQuestions = count($answers);
    $correctAnswers = 0;
    
    foreach ($answers as $question => $correctAnswer) {
      if (isset($_POST[$question]) && $_POST[$question] === $correctAnswer) {
        $correctAnswers++;
        echo '<p class="correct">Question ' . substr($question, 1) . ': Correct</p>';
      } else {
        echo '<p class="wrong">Question ' . substr($question, 1) . ': Wrong</p>';
      }
    }
    
    $marks = round(($correctAnswers / $totalQuestions) * 100);
    
    echo '<h2>Your Marks: ' . $marks . '%</h2>';
    ?>
  </div>
</body>
</html>

