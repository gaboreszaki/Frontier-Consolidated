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
        
        protected $casts
            = [
                'created_at' => 'datetime:Y-m-d',
                'updated_at' => 'datetime:Y-m-d'
            ];
        
        public function scopeLastAnnouncement(Builder $query): void
        {
            $query->where('is_announcement', '=', 1)
                ->latest();
        }
        
        
        public function scopeLastFewNews(Builder $query): void
        {
            $query->where('is_announcement', '=', 0)
                ->orderBy('updated_at', 'desc')->limit(5);
            
        }
        
    }
