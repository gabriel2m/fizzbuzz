<?php

namespace App\Http\Controllers;

use App\Services\FizzBuzzServiceInterface;

/**
 * Controller para gerenciar as requests para paginas genericas
 */
class PagesController extends Controller
{
    /**
     * Action da pagina home
     */
    public function home(FizzBuzzServiceInterface $fizzBuzzService)
    {
        return view('pages.home', ['data' => $fizzBuzzService->run(1, 100)]);
    }
}
