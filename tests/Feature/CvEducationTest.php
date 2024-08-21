<?php
declare(strict_types=1);

use App\Models\Cv;
use App\Models\CvEducation;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('can add education to cv', function () {
    $cv = Cv::factory()->create();

    $response = $this->actingAs($cv->user)
        ->post(route('cvs.educations.store', $cv), [
            'school' => 'Test University',
            'level' => 'Higher',
            'start_date' => '1972-01-01',
            'end_date' => '1972-01-02',
        ]);

    $response->assertStatus(302)
        ->assertRedirect(route('cvs.show', $cv));
    $this->assertDatabaseHas('cv_education', [
        'cv_id' => $cv->id,
        'school' => 'Test University',
        'level' => 'Higher',
        'start_date' => '1972-01-01',
        'end_date' => '1972-01-02',
    ]);
});

it('can delete education from cv', function () {
    $education = CvEducation::factory()->create();

    $response = $this->actingAs($education->cv->user)
        ->delete(route('cvs.educations.destroy', [$education->cv, $education]));

    $response->assertStatus(302)
        ->assertRedirect(route('cvs.show', $education->cv));
    $this->assertDatabaseMissing('cv_education', [
        'id' => $education->id,
        'school' => $education->school,
    ]);
});

it('can update education entry', function () {
    $education = CvEducation::factory()->create();

    $response = $this->actingAs($education->cv->user)
        ->put(route('cvs.educations.update', [$education->cv, $education]),
            [
                'school' => 'Test University',
                'level' => 'Higher',
                'start_date' => '1972-01-01',
                'end_date' => '1972-01-02',
            ]
        );

    $response->assertStatus(302)
        ->assertRedirect(route('cvs.show', $education->cv));
    $this->assertDatabaseHas('cv_education', [
        'id' => $education->id,
        'cv_id' => $education->cv->id,
        'school' => 'Test University',
        'level' => 'Higher',
        'start_date' => '1972-01-01',
        'end_date' => '1972-01-02',
    ]);
});

