<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Facades\DB;

use App\Models\User;
use App\Models\Category;

class Topic extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'id',
        'name',
        'user_id',
        'category_id',
    ];

    protected $casts = [
        'created_on' => 'datetime',
    ];

    public function user(): BelongsTo
    {
        //this topic belongs to one user
        return $this->belongsTo(User::class);
    }

    public function categories(): BelongsToMany
    {
        //this topic has many categories
        return $this->belongsToMany(Category::class, 'topic_categories');
    }
}
