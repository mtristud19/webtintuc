<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table ='category';
    protected $primaryKey ='idnhomtin';
    protected $keyType ='string';
    // public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'idnhomtin',
        'tennhomtin',
        'status'
    ];
    public function loaitin(){
        return $this->hasMany(Loaitin::class,'idnhomtin','idnhomtin');
    }
    public function tintuc(){
        return $this->hasManyThrough(Tintuc::class,Loaitin::class,'idnhomtin','idloaitin','idnhomtin');
    }
}
