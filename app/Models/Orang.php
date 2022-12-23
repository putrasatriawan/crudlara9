<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orang extends Model
{
    use HasFactory;

    public $fillable = ['nama', 'tgl_lahir', 'jk', 'alamat', 'hobi'];

    public $timestamps = true;
    // public function setHobiAttribute($value)
    // {
    //     $this->attributes['hobi'] = json_encode($value);
    // }

    // public function getHobiAttribute($value)
    // {
    //     return $this->attributes['hobi'] = json_decode($value);
    // }
}