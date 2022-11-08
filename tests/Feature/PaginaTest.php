<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PaginaTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_pagina_contacto()
    {
        $response = $this->get('/contacto');

        $response->assertStatus(200);
        $response->assertSeeText(['Nombre','Correo','Teléfono','Nota']);
    }

    /** @test */
    public function validacion_formulario()
    {
        $response = $this->post('/contacto', [
            'Name' => '',
            'Email'=> 'correoNoValido',
            'Phone'=>'',
            'Message'=>'abc', 
        ]);

        $response->assertSessionHasErrors(
            'Name',
            'Email',
            'Phone',
            'Message',
        );
    }
    
    /** @test */
    public function prellenado_formulario_contacto()
    {
        $response = $this->get('/contacto/1234');
        $response->assertStatus(200);
        $this->assertEquals('Jorge Perez', $response['nombre']);
    }
}
