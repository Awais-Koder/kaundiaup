<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Certificate;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\CertificateController
 */
final class CertificateControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    #[Test]
    public function index_displays_view(): void
    {
        $certificates = Certificate::factory()->count(3)->create();

        $response = $this->get(route('certificates.index'));

        $response->assertOk();
        $response->assertViewIs('certificate.index');
        $response->assertViewHas('certificates');
    }


    #[Test]
    public function create_displays_view(): void
    {
        $response = $this->get(route('certificates.create'));

        $response->assertOk();
        $response->assertViewIs('certificate.create');
    }


    #[Test]
    public function store_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\CertificateController::class,
            'store',
            \App\Http\Requests\CertificateStoreRequest::class
        );
    }

    #[Test]
    public function store_saves_and_redirects(): void
    {
        $name = fake()->name();

        $response = $this->post(route('certificates.store'), [
            'name' => $name,
        ]);

        $certificates = Certificate::query()
            ->where('name', $name)
            ->get();
        $this->assertCount(1, $certificates);
        $certificate = $certificates->first();

        $response->assertRedirect(route('certificates.index'));
        $response->assertSessionHas('certificate.id', $certificate->id);
    }


    #[Test]
    public function show_displays_view(): void
    {
        $certificate = Certificate::factory()->create();

        $response = $this->get(route('certificates.show', $certificate));

        $response->assertOk();
        $response->assertViewIs('certificate.show');
        $response->assertViewHas('certificate');
    }


    #[Test]
    public function edit_displays_view(): void
    {
        $certificate = Certificate::factory()->create();

        $response = $this->get(route('certificates.edit', $certificate));

        $response->assertOk();
        $response->assertViewIs('certificate.edit');
        $response->assertViewHas('certificate');
    }


    #[Test]
    public function update_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\CertificateController::class,
            'update',
            \App\Http\Requests\CertificateUpdateRequest::class
        );
    }

    #[Test]
    public function update_redirects(): void
    {
        $certificate = Certificate::factory()->create();
        $name = fake()->name();

        $response = $this->put(route('certificates.update', $certificate), [
            'name' => $name,
        ]);

        $certificate->refresh();

        $response->assertRedirect(route('certificates.index'));
        $response->assertSessionHas('certificate.id', $certificate->id);

        $this->assertEquals($name, $certificate->name);
    }


    #[Test]
    public function destroy_deletes_and_redirects(): void
    {
        $certificate = Certificate::factory()->create();

        $response = $this->delete(route('certificates.destroy', $certificate));

        $response->assertRedirect(route('certificates.index'));

        $this->assertModelMissing($certificate);
    }
}
