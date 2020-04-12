<?php

namespace App;

use App\QueryFilters\Post\Name;
use App\QueryFilters\Post\Sort;
use App\QueryFilters\Post\Title;
use Illuminate\Pipeline\Pipeline;
use App\QueryFilters\Post\Published;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected static $unguarded = true;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function getFilteredPosts()
    {
        return app(Pipeline::class)
            ->send(self::query())
            ->through([
                Name::class,
                Sort::class,
                Title::class,
                Published::class,
            ])
            ->thenReturn()
            ->get();
    }
}
