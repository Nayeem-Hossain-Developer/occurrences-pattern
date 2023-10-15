<?php
function findPatternOccurrences($text, $pattern) {
    $textLength = strlen($text);
    $patternLength = strlen($pattern);
    $occurrences = 0;

    for ($i = 0; $i <= $textLength - $patternLength; $i++) {
        $j = 0;

        while ($j < $patternLength && $text[$i + $j] === $pattern[$j]) {
            $j++;
        }

        if ($j === $patternLength) {
            $occurrences++;
        }
    }

    return $occurrences;
}


$text = "tadadattaetadadadafa";
$pattern = "dada";

$occurrences = findPatternOccurrences($text, $pattern);
echo $occurrences;

?> 
