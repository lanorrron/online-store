<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = ('articles');
    protected $primaryKey = ('id');

    protected $fillable = [
        'name',
        'description'
    ];
    public $timestamps = TRUE;
    use HasFactory;

    public function colors(){
        return $this->belongsToMany(Color::class);
    }
}
