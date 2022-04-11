<?php

declare(strict_types=1);

namespace TransliterationReplacer\Dictionaries;

class RusCharsDictionary
{
    //key => wrong chars
    //value => correcy chars
    private const CHARS_MAP = [
        'О' => 'О',
        'А' => 'А',
        'Е' => 'Е',
        'Т' => 'T',
        'Р' => 'P',
        'Н' => 'H',
        'К' => 'K',
        'Х' => 'X',
        'С' => 'C',
        'В' => 'B',
        'М' => 'M',
        'о' => 'o',
        'а' => 'a',
        'е' => 'e',
        'р' => 'p',
        'к' => 'k',
        'х' => 'x',
        'с' => 'c',
    ];
}