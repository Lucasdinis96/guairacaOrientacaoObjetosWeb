<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    protected $table ='professors';
    protected $fillable = ['nome','email','registro','telefone'];

    use HasFactory;
}
