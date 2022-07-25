<?php

namespace App\Services;

/**
 * Serviço que quando executado deve retornar um array 
 * contendo os numeros entre o intervalo requisitado 
 * ou "Fizz" caso o numero seja divisivel por 3 
 * ou "Buzz" caso seja divisivel por 7 
 * ou "FizzBuzz" caso seja ambos
 */
interface FizzBuzzServiceInterface
{
    /**
     * Executa o Service
     */
    public function run(int $from, int $to): array;
}
