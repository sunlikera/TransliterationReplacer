<?php

declare(strict_types=1);

namespace TransliterationReplacer;

use TransliterationReplacer\Dictionaries\Factory;
use TransliterationReplacer\Dictionaries\CharsDictionaryInterface;

class Service
{
    /**
     * @var string
     */
    private $text;

    /**
     * @var array
     */
    private $result;

    /**
     * @var CharsDictionaryInterface
     */
    private $dictionary;

    /**
     * @var Correcter
     */
    private $correcter;

    /**
     * @var Detecter
     */
    private $detecter;

    public function __construct()
    {
        $this->correcter = new Correcter();
        $this->detecter = new Detecter();
        $this->dictionary = Factory::getEngCharsDictionary();
    }

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
        return $this->correcter->getCorrectedText($this->text, $this->dictionary);
    }

    public function detect(): array
    {
        return $this->detecter->detect($this->text, $this->dictionary);
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