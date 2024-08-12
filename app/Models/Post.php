<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = [
        "title",
        "excerpt",
        "body"
    ];

    protected $guarded = [
        "id"
    ];

    protected $with = [
        "categories",
        "user"
    ];

    public function scopeFilter($query, array $filters){
        
        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('title', 'like', '%' . $search . '%')
                    ->orWhere('body', 'like', '%' . $search . '%');
        });

        $query->when($filters['category'] ?? false, function($query, $category){

            return $query->whereHas('categories', function($query) use ($category){
                $query->where('slug', $category);
            });
        });

        $query->when($filters['user'] ?? false, function($query, $user){
            return $query->whereHas('user', function($query) use ($user){
                $query->where('username', $user);
            });
        });

        // $query->when($filters['user'] ?? false, fn($query, $user) => 
        //     $query->whereHas('user', fn($query) => 
        //         $query->where('username', $user)
        //     )
        // );

    }
    
    public function categories(): BelongsTo {

        return $this->belongsTo(Category::class, "category_id", "id");

    }

    public function user(): BelongsTo {

        return $this->belongsTo(User::class, "user_id", "id");

    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array{
        
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];

    }

}
