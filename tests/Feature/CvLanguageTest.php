<?php
declare(strict_types=1);

use App\Models\Cv;
use App\Models\CvLanguage;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('can add language to cv', function () {
    $cv = Cv::factory()->create();

    $response = $this->actingAs($cv->user)
        ->post(route('cvs.languages.store', $cv), [
            'language' => 'English',
            'level' => 'C1',
        ]);

    $response->assertStatus(302)
        ->assertRedirect(route('cvs.show', $cv));
    $this->assertDatabaseHas('cv_languages', [
        'language' => 'English',
        'level' => 'C1',
    ]);
});

it('can delete language from cv', function () {
    $language = CvLanguage::factory()->create();

    $response = $this->actingAs($language->cv->user)
        ->delete(route('cvs.languages.destroy', [$language->cv, $language]));

    $response->assertStatus(302)
        ->assertRedirect(route('cvs.show', $language->cv));
    $this->assertDatabaseMissing('cv_languages', [
        'language' => $language->language,
        'level' => $language->level,
    ]);
});

it('can update language entry', function () {
    $language = CvLanguage::factory()->create();

    $response = $this->actingAs($language->cv->user)
        ->put(route('cvs.languages.update', [$language->cv, $language]),
            [
                'language' => 'English',
                'level' => 'C1',
            ]
        );

    $response->assertStatus(302)
        ->assertRedirect(route('cvs.show', $language->cv));
    $this->assertDatabaseHas('cv_languages', [
        'language' => 'English',
        'level' => 'C1',
    ]);
});

