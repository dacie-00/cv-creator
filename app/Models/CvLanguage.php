<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CvLanguage extends Model
{
    use HasFactory;

    public const LEVEL_A1 = 'A1';
    public const LEVEL_A2 = 'A2';
    public const LEVEL_B1 = 'B1';
    public const LEVEL_B2 = 'B2';
    public const LEVEL_C1 = 'C1';
    public const LEVEL_C2 = 'C2';

    public const LEVELS = [
        self::LEVEL_A1,
        self::LEVEL_A2,
        self::LEVEL_B1,
        self::LEVEL_B2,
        self::LEVEL_C1,
        self::LEVEL_C2
    ];

    protected $fillable = [
        'language',
        'level',
    ];

    protected $touches = ['cv'];

    public function cv(): BelongsTo
    {
        return $this->belongsTo(Cv::class);
    }
}
