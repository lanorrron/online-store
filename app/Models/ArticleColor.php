<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleColor extends Model
{
    protected $table = ('article_color');
    protected $primaryKey = ('id');

    protected $fillable = [
        'article_id',
        'color_id',
        'size_id',
        'price',
        'image_url',
        'stock'
    ];
    public $timestamps=false;
    use HasFactory;


    public function articles(){
        return $this->hasMany(Article::class);
    }
    public function colors(){
        return $this->hasMany(Article_colorarticles::class);
    }
}
