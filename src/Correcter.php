<?php

declare(strict_types=1);

namespace TransliterationReplacer;

use TransliterationReplacer\Detecter\DetectedResult;

class Correcter
{
    /**
     * @param string $text
     * @param DetectedResult $detected
     * @return string
     */
	public function getCorrectedText(string $text, DetectedResult $detected): string
    {
        $detectedResult = $detected->getResult();
        $mistakes = [];
        $correctChars = [];

        foreach ($detectedResult as $item) {
            $mistakes[] = $item['char'];
            $correctChars[] = $item['correct'];
        }

        return str_replace($mistakes, $correctChars, $text);
    }
}
