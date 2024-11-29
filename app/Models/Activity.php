<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Activity extends Model
{
    protected $fillable = [
        'title',
        'description',
        'start_date',
        'end_date',
        'location',
        'status',
        'slug',
    ];

    // Event untuk otomatis membuat slug saat kegiatan dibuat atau diperbarui
    protected static function booted()
    {
        static::creating(function ($activity) {
            $activity->slug = Str::slug($activity->title); // Membuat slug otomatis berdasarkan judul
        });
    }
}
