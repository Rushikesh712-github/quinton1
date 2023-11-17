<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Store the correct answers
    $correct_answers = array(
        'q1' => 'a',
        'q2' => 'b',
        'q3' => 'a',
        'q4' => 'c',
        'q5' => 'a',
        'q6' => 'b',
        'q7' => 'c',
        'q8' => 'd',
        'q9' => 'b',
        'q10' => 'c',
        'q11' => 'a',
        'q12' => 'b',
        'q13' => 'd',
        'q14' => 'c',
        'q15' => 'a',
        'q16' => 'b',
        'q17' => 'd',
        'q18' => 'c',
        'q19' => 'b',
        'q20' => 'a',
    );

    // Initialize variables
    $total_questions = count($correct_answers);
    $correct_count = 0;
    $incorrect_questions = array();

    // Check the submitted answers
    foreach ($correct_answers as $question => $correct_answer) {
        if (isset($_POST[$question]) && $_POST[$question] === $correct_answer) {
            $correct_count++;
        } else {
            $incorrect_questions[$question] = $correct_answer;
        }
    }

    // Calculate the score and percentage
    $score = $correct_count;
    $percentage = ($correct_count / $total_questions) * 100;

    // Display the results
    echo '<!DOCTYPE html>';
    echo '<html>';
    echo '<head>';
    echo '<title>C++ Quiz - Results</title>';
    echo '<style>';
    echo 'body { font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px; }';
    echo 'h1 { text-align: center; color: #555; }';
    echo '.quiz { margin: 20px auto; width: 600px; background-color: #fff; border: 1px solid #ccc; padding: 20px; border-radius: 4px; }';
    echo '.quiz h2 { margin-bottom: 20px; color: #555; }';
    echo '.quiz p { margin: 0; }';
    echo '.quiz .score { font-weight: bold; margin-top: 20px; }';
    echo '.incorrect { background-color: #ffcccc; padding: 10px; margin-bottom: 10px; border-radius: 4px; }';
    echo '</style>';
    echo '</head>';
    echo '<body>';
    echo '<h1>C++ Quiz - Results</h1>';
    echo '<div class="quiz">';
    echo '<h2>Results</h2>';
    echo '<p>Total Questions: ' . $total_questions . '</p>';
    echo '<p>Correct Answers: ' . $correct_count . '</p>';
    echo '<p>Incorrect Answers: ' . (count($incorrect_questions)) . '</p>';
    echo '<p class="score">Score: ' . $score . '/' . $total_questions . '</p>';
    echo '<p>Percentage: ' . $percentage . '%</p>';

    if (!empty($incorrect_questions)) {
        echo '<h2>Incorrect Questions</h2>';

        foreach ($incorrect_questions as $question => $correct_answer) {
            echo '<div class="incorrect">';
            echo '<p><strong>Question ' . substr($question, 1) . '</strong></p>';
            echo '<p>Correct Answer: ' . $correct_answer . '</p>';
            echo '</div>';
        }
    }

    echo '</div>';
    echo '</body>';
    echo '</html>';
} 

?>

