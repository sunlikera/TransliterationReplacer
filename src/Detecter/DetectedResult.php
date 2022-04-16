<?php

declare(strict_types=1);

namespace TransliterationReplacer\Detecter;

class DetectedResult
{
    /**
     * @var array
     */
    private $result;

    /**
     * @param array $result
     */
    public function __construct(array $result)
    {
        $this->result = $result;
    }

    /**
     * @return array
     */
    public function getResult(): array
    {
        return $this->result;
    }
}