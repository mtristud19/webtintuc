<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Tintuc extends Model
{
    use HasFactory;
    use Searchable;
    protected $table ='tintuc';
    protected $primaryKey ='idtintuc';
    // protected $keyType ='string';
    // public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'idtintuc',
        'tieude',
        'img',
        'mota',
        'noidung',
        'ngaydang',
        'idloaitin',
        'luotxem',
        'hot',
        'trangthai'
    ];
    public function loaitin(){
        return $this->belongsTo(Loaitin::class,'idloaitin','idloaitin');
    }
    public function comment(){
        return $this->hasMany(Comment::class,'idtintuc','idtintuc');
    }
}
