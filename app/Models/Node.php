<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Node extends Model
{
    use HasFactory, HasTranslations;
    public $translatable = ['title'];
    public static function getList(array $filters)
    {
        $query = self::query();
        $query->when(array_key_exists('parent', $filters) && $filters['parent'] !== '', function ($query) use ($filters) {
            $query->where('parent', $filters['parent']);
        });
        return $query;
    }
}
