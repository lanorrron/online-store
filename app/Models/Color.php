<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $table=('colors');
    protected $primaryKey=('id');

    protected $fillable=[
        'name'
    ];
    public $timestamps=false;
    use HasFactory;

    public function articles(){
        return $this->belongsToMany(Article:: class);
    }

}
