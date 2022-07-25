<?php

namespace App\Services;

use App\Exceptions\FizzBuzzException;

/**
 * Serviço que quando executado deve retornar um array 
 * contendo os numeros entre o intervalo requisitado 
 * ou "Fizz" caso o numero seja divisivel por 3 
 * ou "Buzz" caso seja divisivel por 7 
 * ou "FizzBuzz" caso seja ambos
 */
class FizzBuzzService implements FizzBuzzServiceInterface
{
     /**
     * Executa o Service
     */
    public function run(int $from, int $to): array
    {
        $data = [];
        // Lancei a exceção apenas após a execução completa do loop 
        // para que seja impresso o resultado e possam verificar se o resultado está correto
        $throw = false;

        for ($i = $from; $i <= $to; $i++) {
            $row = '';
            if (!($i % 3)) {
                $row .= 'Fizz';
            }
            if (!($i % 7)) {
                $row .= 'Buzz';
            }
            if (!$row) {
                $row = "$i";
            } elseif ($row == "FizzBuzz") {
                $throw = true;
            }
            $data[] = $row;
        }

        if ($throw) {
            $exception = new FizzBuzzException($data);
            throw $exception;
        }

        return $data;
    }
}
