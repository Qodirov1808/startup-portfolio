<?php

namespace App\Models;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use App\Models\Home;
class LangButton extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $casts=[
        'button_name' => 'array',
    ];
    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }
    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }

    public function home()
    {
        return $this->belongsTo(Home::class);
    }
    public function homes()
    {
        return $this->hasMany(Home::class);
    }
}
