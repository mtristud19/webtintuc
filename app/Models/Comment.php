<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table ='binhluan';
    protected $primaryKey ='idbinhluan';
    protected $keyType ='string';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'idbinhluan',
        'email',
        'noidung',
        'idusers',
        'idtintuc',
        'trangthai'
    ];
    public function tintuc(){
        return $this->hasMany(Tintuc::class,'idloaitin','idloaitin');
    }
    public function user(){
        return $this->belongsTo(Users::class,'idusers','idusers');
    }
}
