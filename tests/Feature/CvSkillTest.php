<?php
declare(strict_types=1);

use App\Models\Cv;
use App\Models\CvSkill;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('can add skill to cv', function () {
    $cv = Cv::factory()->create();

    $response = $this->actingAs($cv->user)
        ->post(route('cvs.skills.store', $cv), [
            'skill' => 'PHP',
        ]);

    $response->assertStatus(302)
        ->assertRedirect(route('cvs.show', $cv));
    $this->assertDatabaseHas('cv_skills', [
        'skill' => 'PHP',
    ]);
});

it('can delete skill from cv', function () {
    $skill = CvSkill::factory()->create();

    $response = $this->actingAs($skill->cv->user)
        ->delete(route('cvs.skills.destroy', [$skill->cv, $skill]));

    $response->assertStatus(302)
        ->assertRedirect(route('cvs.show', $skill->cv));
    $this->assertDatabaseMissing('cv_skills', [
        'id' => $skill->id,
        'cv_id' => $skill->cv->id,
        'skill' => $skill->skill,
    ]);
});

it('can update skill entry', function () {
    $skill = CvSkill::factory()->create();

    $response = $this->actingAs($skill->cv->user)
        ->put(route('cvs.skills.update', [$skill->cv, $skill]),
            [
                'skill' => 'PHP',
            ]
        );

    $response->assertStatus(302)
        ->assertRedirect(route('cvs.show', $skill->cv));
    $this->assertDatabaseHas('cv_skills', [
        'id' => $skill->id,
        'cv_id' => $skill->cv->id,
        'skill' => 'PHP',
    ]);
});

