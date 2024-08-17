<?php
declare(strict_types=1);

use App\Models\Cv;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('can create a cv', function () {
    $user = User::factory()->create();
    $response = $this->actingAs($user)
        ->post(route('cvs.store'), [
            'full_name' => 'John Doe',
            'email' => 'john@doe.com',
            'phone_number' => '0123456789',
            'address' => 'Earth',
        ]);

    $response->assertStatus(302)->assertRedirect(route('cvs.index'));

    $this->assertDatabaseHas('cvs', [
        'user_id' => $user->id,
        'full_name' => 'John Doe',
        'email' => 'john@doe.com',
        'phone_number' => '0123456789',
        'address' => 'Earth',
    ]);
});

it('can update a cv', function () {
    $user = User::factory()->create();
    $cv = Cv::factory()->create(['user_id' => $user->id]);
    $response = $this->actingAs($user)
        ->patch(route('cvs.update', ['cv' => $cv]), [
            'full_name' => 'John Doe',
            'email' => 'john@doe.com',
            'phone_number' => '0123456789',
            'address' => 'Earth',
        ]);

    $response->assertStatus(302)->assertRedirect(route('cvs.show', ['cv' => $cv]));

    $this->assertDatabaseHas('cvs', [
        'full_name' => 'John Doe',
        'email' => 'john@doe.com',
        'phone_number' => '0123456789',
        'address' => 'Earth',
    ]);
});

it('can delete a cv', function () {
    Carbon::setTestNow();
    $user = User::factory()->create();
    $cv = Cv::factory()->create();

    $response = $this->actingAs($user)
        ->delete(route('cvs.destroy', [$cv->id]));

    $response->assertStatus(302)->assertRedirect(route('cvs.index'));
    $this->assertSoftDeleted('cvs', [
        'id' => $cv->id,
        'deleted_at' => now()->toDateTimeString(),
    ]);
});

it('can index cvs', function () {
    $user = User::factory()->create();
    $cvs = Cv::factory(4)->create(['user_id' => $user->id]);

    $response = $this->actingAs($user)
        ->get(route('cvs.index'));

    $response->assertStatus(200)
        ->assertViewIs('cvs.index')
        ->assertViewHas('cvs', $cvs);
});

it('can show a cv', function () {
    $user = User::factory()->create();
    $cv = Cv::factory()->create(['user_id' => $user->id]);

    $response = $this->actingAs($user)
        ->get(route('cvs.show', [$cv->id]));

    $response->assertStatus(200)
        ->assertViewIs('cvs.show')
        ->assertViewHas('cv', $cv);
});

