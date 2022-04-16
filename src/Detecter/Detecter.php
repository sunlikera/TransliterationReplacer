<?php

declare(strict_types=1);

namespace TransliterationReplacer\Detecter;

use TransliterationReplacer\Dictionaries\CharsDictionaryInterface;

class Detecter
{
    /**
     * @param string $text
     * @param CharsDictionaryInterface $dictionary
     * @return DetectedResult
     */
    public function detect(string $text, CharsDictionaryInterface $dictionary): DetectedResult
    {
        $result = [];

        for ($i = 0, $length = strlen($text); $i < $length; $i++) {
            $char = $text[$i];

            if ($correctChar = $dictionary::getCharsMap()[$char]) {
                $result[] = [
                    'index' => $i,
                    'char' => $char,
                    'correct' => $correctChar,
                ];
            }
        }

        return new DetectedResult($result);
    }
}