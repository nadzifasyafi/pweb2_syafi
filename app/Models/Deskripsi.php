<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deskripsi extends Model
{
    use HasFactory;
    protected $table = 'Deskripsi';
    protected $fillable = ['nim','nama','deskripsi'];
    public $timestamps = false;
}
