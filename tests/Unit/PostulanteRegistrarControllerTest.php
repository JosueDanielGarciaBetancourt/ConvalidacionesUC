<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Response;
use Tests\TestCase;
use Illuminate\Support\Facades\Log;


class PostulanteRegistrarControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    public function create_method_returns_view()
    {
        $response = $this->get(route('postulantesRegistrar.create'));

        $response->assertStatus(200);
        $response->assertViewIs('dashboard.postulantesRegistrar');
    }

    public function test_store_method_creates_postulante_and_redirects()
    {
        // Simular autenticación para evitar redirección a la ruta de inicio de sesión
        $user = User::factory()->create(); // Crea un usuario autenticado

        $this->actingAs($user);

        $postulanteData = [
            'idPostulante' => $this->faker->numerify('########'),
            'nombrePostulante' => $this->faker->name,
            'carreraProcedenciaPostulante' => $this->faker->word,
            'institucionProcedenciaPostulante' => $this->faker->company,
        ];

        $response = $this->post(route('postulantesRegistrar.store'), $postulanteData);

        $response->assertRedirect(route('postulantesRegistrar.create'));
        $response->assertSessionHas('success', 'Postulante registrado con éxito.');

        $this->assertDatabaseHas('postulantes', [
            'idPostulante' => $postulanteData['idPostulante'],
            'nombrePostulante' => $postulanteData['nombrePostulante'],
            'carreraProcedenciaPostulante' => $postulanteData['carreraProcedenciaPostulante'],
            'institucionProcedenciaPostulante' => $postulanteData['institucionProcedenciaPostulante'],
        ]);
    }
}
