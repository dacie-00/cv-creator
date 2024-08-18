<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cv extends Model
{
    use HasFactory, SoftDeletes, HasUuids;

    protected $fillable = [
        'title',
        'full_name',
        'email',
        'phone_number',
        'address',
        'about',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function workExperiences(): HasMany
    {
        return $this->hasMany(CvWorkExperience::class);
    }

    public function educations(): HasMany
    {
        return $this->hasMany(CvEducation::class);
    }

    public function languages(): HasMany
    {
        return $this->hasMany(CvLanguage::class);
    }

    public function skills(): HasMany
    {
        return $this->hasMany(CvSkill::class);
    }
}
