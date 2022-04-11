<?php

declare(strict_types=1);

namespace TransliterationReplacer\Dictionaries;

class Factory
{
    /**
     * @return EngCharsDictionary
     */
    public static function getEngCharsDictionary(): EngCharsDictionary
    {
        return new EngCharsDictionary();
    }

    /**
     * @return RusCharsDictionary
     */
    public static function getRusCharsDictionary(): RusCharsDictionary
    {
        return new RusCharsDictionary();
    }
}