<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Crud extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['firstname','lastname','image'];
    protected $dates = ['deleted_at'];
}
