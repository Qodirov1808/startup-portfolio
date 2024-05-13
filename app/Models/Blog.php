<?php

namespace App\Models;

use App\Models\LangButton;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $casts=[
        'title' => 'array',
    ];
    public function langButton()
    {
        return $this->belongsTo(LangButton::class, 'blog_id');
    }
    public function langButtons()
    {
        return $this->hasMany(LangButton::class,'blog_id');
    }
}
