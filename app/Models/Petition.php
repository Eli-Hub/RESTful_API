<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petition extends Model
{
    use HasFactory;

    //Mass Assignment
    //List of fields we can allow mass assignments on
    protected $fillable = ['title', 'description', 'category', 'author', 'signees'];


//List of fields that can not be mass assigned
//    protected $guarded;
}
