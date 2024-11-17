<?php

namespace App\Http\Controllers;

use App\Services\NumberTranslationService;
use Illuminate\Http\Request;

class NumberToTextController extends Controller
{
    protected $numberTranslationService;

    public function __construct(NumberTranslationService $service)
    {
        $this->numberTranslationService = $service;
    }

    public function translate($number)
    {
        try {
            // Chamar o Service para realizar a tradução
            $text = $this->numberTranslationService->translateNumber($number);

            // Retornar o número e seu texto por extenso
            return response()->json(['number' => $number, 'text' => $text]);
        } catch (\InvalidArgumentException $e) {
            // Retornar erro para entrada inválida
            return response()->json(['error' => $e->getMessage()], 400);
        } catch (\Exception $e) {
            // Retornar erro genérico
            return response()->json(['error' => 'An unexpected error occurred.'], 500);
        }
    }
}
