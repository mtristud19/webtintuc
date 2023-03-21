<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $table ='admin';
    protected $primaryKey ='idadmin';
    protected $keyType ='string';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'idadmin',
        'username',
        'password',
       
    ];
}
