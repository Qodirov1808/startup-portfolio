<?php

namespace App\Models;
use App\Models\LangButton;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;use Illuminate\Support\Facades\App;

class Home extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $casts=[
        'title' => 'array',
    ];
    public function langButton()
    {
        return $this->belongsTo(LangButton::class, 'home_id');
    }
    public function langButtons()
    {
        return $this->hasMany(LangButton::class, 'home_id');
    }
}
