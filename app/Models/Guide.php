<?php
    
    namespace App\Models;
    
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Database\Eloquent\Relations\BelongsToMany;
    
    class Guide extends Model
    {
        
        use HasFactory;
        
        public function category(): BelongsTo
        {
            return $this->belongsTo(Category::class, 'category_id');
        }
        
        public function tag(): BelongsToMany
        {
            return $this->belongsToMany(Tag::class);
        }
        
    }
