<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable
        = [
            'title',
            'content',
            'author'
        ];
    
    public function scopeLastAnnouncement(Builder $query): void
    {
        $query->where('is_announcement', '=', 1)
        ->latest();
    }
    
    
}
