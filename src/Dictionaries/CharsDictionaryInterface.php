<?php

declare(strict_types=1);

namespace TransliterationReplacer\Dictionaries;

interface CharsDictionaryInterface {
    /**
     * @return array
     */
    public static function getCharsMap(): array;
}