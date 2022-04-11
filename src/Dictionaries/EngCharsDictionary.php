<?php

declare(strict_types=1);

namespace TransliterationReplacer\Dictionaries;

class EngCharsDictionary implements CharsDictionaryInterface
{
    public static function getCharsMap(): array
    {
        return [
            'O' => 'О',
            'A' => 'А',
            'E' => 'Е',
            'T' => 'Т',
            'P' => 'Р',
            'H' => 'Н',
            'K' => 'К',
            'X' => 'Х',
            'C' => 'С',
            'B' => 'В',
            'M' => 'М',
            'o' => 'о',
            'a' => 'а',
            'e' => 'е',
            'p' => 'р',
            'k' => 'к',
            'x' => 'х',
            'c' => 'с',
        ];
    }
}