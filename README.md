Desafiio FizzBuzz
===

Author: <a href="https://github.com/gabriel2m" target="_blank">github.com/gabriel2m</a>

Sobre
---

Desafio fizzBuzz implementado na versão 9 do Laravel (ultima versão disponivel no momento da implementação) que retorna os números de 1 a 100. Mas para múltiplos de 3 imprima 'Fizz' em vez do número e para os múltiplos de 7 imprima  'Buzz'. Para os números que forem múltiplos de três e sete imprimir 'FizzBuzz'

Funções
---
  * Uma rota '/' que: 
    1. Imprima os números de 1 a 100. Mas para múltiplos de 3 imprima 'Fizz' em vez do número e para os múltiplos de 7 imprima  'Buzz'. Para os números que forem múltiplos de três e sete imprimir 'FizzBuzz'.

    2. Considere o resultado 'FizzBuzz' um erro de sistema.

  * Um teste para realizar a depuração dos erros da rota '/'

Instruções
---
  **Acessar Rota principal**:
  * Acesse `/`  
  (<a href="http://127.0.0.1/" target="_blank">http://127.0.0.1/</a> com Docker)

  **Executar os testes**:
  * Execute o comando `$ php artisan test`  
  (`$ docker-compose exec php artisan test` com Docker)
  
Instalação
---
  * Clone o repositorio
  * Crie o arquivo .env usando .env.example como base
  * Suba os containers `$ docker-compose up`
  * Tudo pronto

Demo
---
  <a href="https://fizzbuzzgabriel.herokuapp.com/" target="_blank">https://fizzbuzzgabriel.herokuapp.com/</a>
