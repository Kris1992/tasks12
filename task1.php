<?php

//Default behaviour is to count whitespaces on the corners of string because You don't specify that
CONST COUNT_CORNERS_WHITESPACES = true;

/**
 * getLongestWord Get the longest word of given arguments
 * @param  mixed ...$words  Given arguments
 * @throws Exception        Throw Exception when one of given arguments is not string
 * @return string
 */
function getLongestWord(...$words): string
{
    $longestWord = null;
    $longestNumberChars = 0;

    foreach ($words as $word) {

        if (is_string($word)) {
            
            if (!COUNT_CORNERS_WHITESPACES) {
                $word = trim($word);
            }

            $actualLenght = strlen($word);
            if ($actualLenght >= $longestNumberChars) {
                $longestNumberChars = $actualLenght;
                $longestWord = $word;
            }

        } else {
            throw new \Exception("One of given arguments isn't string.");
        }

    }

    return $longestWord;
} 

try {
    $longestWord = getLongestWord('aa', 'b  d', '40 ', 'sdsdads','sadadadsds');
    echo $longestWord;
} catch (\Exception $e) {
    echo $e->getMessage();
}
