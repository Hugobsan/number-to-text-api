<?php

namespace App\Services;

class NumberTranslationService
{
    public function translateNumber($number)
    {
        // Validar o número
        if (!is_numeric($number)) {
            throw new \InvalidArgumentException('Input must be a valid number.');
        }

        // Converte o número para texto por extenso
        $formatter = new \NumberFormatter("pt_BR", \NumberFormatter::SPELLOUT);
        return $formatter->format($number);
    }
}
