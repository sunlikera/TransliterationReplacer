<?php

declare(strict_types=1);

namespace TransliterationReplacer;

use TransliterationReplacer\Dictionaries\Factory;

class Service
{
    private $text;

    private $target;

    private $result;

    private $dictionary;

    /**
     * @param string $text
     * @return void
     */
    public function setText(string $text): void
    {
        $this->text = $text;
    }

    /**
     * @return string
     */
    public function getCorrectedText(): string
    {
        return '';
    }

    public function detect(): void
    {
        
    }

    public function setEngCharsAsTarget(): void
    {
        $this->dictionary = Factory::getEngCharsDictionary();
    }

    public function setRusCharsAsTarget(): void
    {
        $this->dictionary = Factory::getRusCharsDictionary();
    }
}