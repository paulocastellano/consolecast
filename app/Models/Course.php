<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

use App\Helpers\DateTimeHelper;

class Course extends Model
{
    use HasFactory, Sluggable, Searchable, SoftDeletes;

    protected $casts = [
        'published' => 'boolean',
        'in_development' => 'boolean',
        'home_featured' => 'boolean',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

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

    public function scopePublished($query)
    {
        return $query->where('published', true);
    }


    public function getWatchTimeAttribute()
    {
        $duration = $this->lessons()->count() >= 1 ? $this->lessons()->sum('duration') : '00:00:00';
        return DateTimeHelper::durationToHumans($duration);
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

    public function topics()
    {
        return $this->belongsToMany(Topic::class)->withTimestamps();
    }
}
