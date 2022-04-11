<?php

declare(strict_types=1);

namespace TransliterationReplacer;

use TransliterationReplacer\Dictionaries\CharsDictionaryInterface;

class Correcter
{
    public function getCorrectedText(string $text, CharsDictionaryInterface $dictionary): string
    {
        $result = '';

        for ($i = 0, $length = strlen($text); $i < $length; $i++) {
            $char = $text[$i];

            if ($correctChar = $dictionary::getCharsMap()[$char]) {
                $char = $correctChar;
            }

            $result .= $char;
        }

        return $result;
    }
}