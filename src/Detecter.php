<?php

declare(strict_types=1);

namespace TransliterationReplacer;

use TransliterationReplacer\Dictionaries\CharsDictionaryInterface;

class Detecter
{
    public function detect(string $text, CharsDictionaryInterface $dictionary): array
    {
        $result = [];

        for ($i = 0, $length = strlen($text); $i < $length; $i++) {
            $char = $text[$i];

            if ($correctChar = $dictionary::getCharsMap()[$char]) {
                $result[] = [
                    'index' => $i,
                    'char' => $char,
                ];
            }
        }

        return $result;
    }
}