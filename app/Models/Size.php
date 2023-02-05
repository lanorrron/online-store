<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $table=('sizes');
    protected $primaryKey=('id');

    protected $fillable=[
        'name'
    ];
    public $timestamps=false;
    use HasFactory;

    public function articleColors(){
        return $this->hasMany(Article_color::class);
}
}
