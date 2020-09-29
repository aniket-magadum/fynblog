<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content'];

    protected $dates = ['published_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
