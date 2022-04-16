<?php

declare(strict_types=1);

namespace TransliterationReplacer;

use TransliterationReplacer\Dictionaries\Factory;
use TransliterationReplacer\Dictionaries\CharsDictionaryInterface;
use TransliterationReplacer\Detecter\Detecter;
use TransliterationReplacer\Detecter\DetectedResult;

class Service
{
    /**
     * @var string
     */
    private $text;

    /**
     * @var DetectedResult
     */
    private $detectedResult;

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
        if (empty($this->detectedResult)) {
            $this->detect();
        }

        return $this->correcter->getCorrectedText($this->text, $this->detectedResult);
    }

    private function detect(): void
    {
        $this->detectedResult = $this->detecter->detect($this->text, $this->dictionary);
    }

    /**
     * @return DetectedResult
     */
    public function getDetectedResult(): DetectedResult
    {
        if (empty($this->detectedResult)) {
            $this->detect();
        }

        return $this->detectedResult;
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