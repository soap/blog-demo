<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'body',
        'created_by'
    ];

    public function owner()
    {
        return $this->belongsTo(User::class,'created_by');
    }
}
