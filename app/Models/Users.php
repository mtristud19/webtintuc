<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    protected $table ='users';
    protected $primaryKey ='idusers';
    protected $keyType ='string';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'idusers',
        'ten',
        'email',
        'password',
       
    ];
    public function comment(){
        return $this->hasMany(Comment::class,'idusers','idusers');
    }
}
