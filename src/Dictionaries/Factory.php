<?php

declare(strict_types=1);

namespace TransliterationReplacer\Dictionaries;

class Factory
{
    /**
     * @return CharsDictionaryInterface
     */
    public static function getEngCharsDictionary(): CharsDictionaryInterface
    {
        return new EngCharsDictionary();
    }

    /**
     * @return CharsDictionaryInterface
     */
    public static function getRusCharsDictionary(): CharsDictionaryInterface
    {
        return new RusCharsDictionary();
    }
}