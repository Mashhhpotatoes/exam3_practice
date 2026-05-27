<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
      use HasFactory;
    //gawa muna table ha bago migrate
    protected $table = 'exam3_db';
    protected $primarykey = 'id';
    protected $fillable = [
        'fname',
        'lname',
        'midname',
        'age',
        'address',
        'zip'
    ];
}
