<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bbs extends Model
{
    use HasFactory;
    use Sluggable;

    public function sluggable(): array {
        return [
            'slug' => [
                'sourse' => 'title'
            ]
            ];
    }

    public function user() {
      return $this->belongsTo(User::class);
    }

}
