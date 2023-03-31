<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booxing extends Model
{
    use HasFactory;
    protected $table='booxing';
    protected $fillable=[ 'nama', 'alamat','no_hp','paket','tgl_booxing'];
    // public $timestamps='false';
}
