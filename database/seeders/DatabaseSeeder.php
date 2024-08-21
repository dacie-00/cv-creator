<?php

namespace Database\Seeders;

use App\Models\Cv;
use App\Models\CvEducation;
use App\Models\CvLanguage;
use App\Models\CvSkill;
use App\Models\CvWorkExperience;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = User::factory()->create([
            'name' => 'test',
            'email' => 'test@test.test',
            'password' => 'testtest',
        ]);

        $cvs = Cv::factory(3)->create(['user_id' => $user->id]);

        foreach ($cvs as $cv) {
            CvWorkExperience::factory(3)->create(['cv_id' => $cv->id]);
            CvEducation::factory(2)->create(['cv_id' => $cv->id]);
            CvLanguage::factory(2)->create(['cv_id' => $cv->id]);
            CvSkill::factory(2)->create(['cv_id' => $cv->id]);
        }
    }
}
