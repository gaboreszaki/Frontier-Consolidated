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
                'author',
                'is_announcement'
            ];
        
        protected $casts
            = [
//                'created_at' => 'datetime:Y-m-d',
//                'updated_at' => 'datetime:Y-m-d',
                'is_announcement' => 'boolean'
            ];
        
        public function scopeAnnouncement(Builder $query): void
        {
            $query->where('is_announcement', '=', 1);
        }
        
        public function scopeNews(Builder $query): void
        {
            $query->where('is_announcement', '=', 0);
        }
        
        public function scopeLast(Builder $query, int $limit = 10): void
        {
            $query->orderBy('updated_at', 'desc')->limit($limit);
        }
        
    }
