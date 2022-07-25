<?php

namespace App\Exceptions;

/**
 * Exceção caso seja encontrado "FizzBuzz" durante a execução do FizzBuzzService
 */
class FizzBuzzException extends \RuntimeException
{
    public function __construct(private array $data, string $message = '', \Throwable $previous = null, int $code = 0)
    {
        parent::__construct(
            $message == '' ? "Erro, \"FizzBuzz\" encontrado nos dados gerados: " . implode(" ", $data) : $message,
            $code,
            $previous
        );
    }
}
