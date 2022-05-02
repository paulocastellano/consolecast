<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Helpers\DateTimeHelper;

use App\Scopes\LessonScope;

class Lesson extends Model
{
    use HasFactory, Sluggable, SoftDeletes;

    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted()
    {
        static::addGlobalScope(new LessonScope);
    }

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

    public function getWatchTimeAttribute()
    {
        return DateTimeHelper::durationToHumans($this->duration);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function lesson_comments()
    {
        return $this->hasMany(LessonComment::class);
    }
}
