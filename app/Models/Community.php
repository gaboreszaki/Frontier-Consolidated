<?php
    
    namespace App\Models;
    
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Builder;
    
    class Community extends Model
    {
        
        use HasFactory;
        
        protected $fillable
            = [
                'layout',
                'title',
                'content',
                'background_image',
                'is_pinned',
                'priority'
            ];
        
        protected $casts
            = [
                'is_pinned' => 'boolean'
            ];
        
        public function scopeDefault(Builder $query): void
        {
            $query
                ->orderBy('is_pinned', 'desc')
                ->orderBy('priority', 'desc')
                ->orderBy('title', 'asc');
        }
        
        public function scopePinned(Builder $query): void
        {
            $query->where('is_pinned', 1);
        }
        
    }
