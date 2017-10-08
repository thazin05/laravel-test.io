<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = 'suppliers';
    protected $fillable = array('id','supplierName','supplierEmail','supplierContact','supplierPosition');
}
