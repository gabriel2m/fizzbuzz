<?php

namespace Tests\Feature\Pages;

use Tests\TestCase;

class HomeTest extends TestCase
{
    /**
     * Testa se home retorna status 200
     *
     * @return void
     */
    public function test_get_returns_ok()
    {
        $response = $this->get('/');

        $response->assertOk();
    }
}
