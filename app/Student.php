<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['FirstName','LastName','Gender','DOB','POB','Phone','SubjectName','Price','Shift','Year','Level','Email'];
}
