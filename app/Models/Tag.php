<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'description',
        'video_url'
    ];
    
    public function guides():BelongsToMany
    {
        return $this->belongsToMany(Guide::class);
    }
    
}
