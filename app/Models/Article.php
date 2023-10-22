<?php

namespace App\Models;

use App\Search\Searchable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use Searchable;
    use HasFactory;

    protected $casts = [
        'tags' => 'json',
    ];
}
