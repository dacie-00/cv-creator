<?php
declare(strict_types=1);

use App\Models\Cv;
use App\Models\CvWorkExperience;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('can add work experience to cv', function () {
    $cv = Cv::factory()->create();

    $response = $this->actingAs($cv->user)
        ->post(route('cvs.work-experiences.store', $cv), [
            'company' => 'test company',
            'role' => 'tester',
            'description' => 'hello',
            'start_date' => '1972-01-01',
            'end_date' => '1972-01-02',
        ]);

    $response->assertStatus(302)
        ->assertRedirect(route('cvs.show', $cv));
    $this->assertDatabaseHas('cv_work_experiences', [
        'cv_id' => $cv->id,
        'company' => 'test company',
        'role' => 'tester',
        'description' => 'hello',
        'start_date' => '1972-01-01',
        'end_date' => '1972-01-02',
    ]);
});

it('can delete work experience from cv', function () {
    $workExperience = CvWorkExperience::factory()->create();

    $response = $this->actingAs($workExperience->cv->user)
        ->delete(route('cvs.work-experiences.destroy', [$workExperience->cv, $workExperience]));

    $response->assertStatus(302)
        ->assertRedirect(route('cvs.show', $workExperience->cv));
    $this->assertDatabaseMissing('cv_work_experiences', [
        'id' => $workExperience->id,
        'cv_id' => $workExperience->cv->id,
        'company' => $workExperience->company,
    ]);
});

it('can update work experience entry', function () {
    $workExperience = CvWorkExperience::factory()->create();

    $response = $this->actingAs($workExperience->cv->user)
        ->put(route('cvs.work-experiences.update', [$workExperience->cv, $workExperience]),
            [
                'company' => 'test company',
                'role' => 'tester',
                'description' => 'hello',
                'start_date' => '1972-01-01',
                'end_date' => '1972-01-02',
            ]
        );

    $response->assertStatus(302)
        ->assertRedirect(route('cvs.show', $workExperience->cv));
    $this->assertDatabaseHas('cv_work_experiences', [
        'id' => $workExperience->id,
        'cv_id' => $workExperience->cv->id,
        'company' => 'test company',
        'role' => 'tester',
        'description' => 'hello',
        'start_date' => '1972-01-01',
        'end_date' => '1972-01-02',
    ]);
});

