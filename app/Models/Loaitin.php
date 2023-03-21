<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loaitin extends Model
{
    use HasFactory;
    protected $table ='loaitin';
    protected $primaryKey ='idloaitin';
    protected $keyType ='string';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'idloaitin',
        'tenloaitin',
        'idnhomtin',
        'status'
    ];
    public function nhomtin(){
        return $this->belongsTo(Category::class,'idnhomtin','idnhomtin');
    }
    public function tintuc(){
        return $this->hasMany(Tintuc::class,'idloaitin','idloaitin');
    }
}
